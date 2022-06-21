<?php
namespace PHPMVC\Models;
use PHPMVC\lib\Database\Database;



class AbstractModel
{

	const DATA_TYPE_BOOL = \PDO::PARAM_BOOL;
	const DATA_TYPE_STR  = \PDO::PARAM_STR;
	const DATA_TYPE_INT  = \PDO::PARAM_INT;
	const DATA_TYPE_DECIMAL = 4;
 	
	 
 

	private function prepareValues(\PDOStatement $stmt){


		foreach (static::$tableSchema as $columnName => $type) {
			
		if ($type == 4 ) {
			
			$sentizeValue = filter_var($this->$columnName,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
			$stmt->bindValue(":{$columnName}",$sentizeValue);

		}else{

			$stmt->bindValue(":{$columnName}",$this->$columnName,$type);

		    }
			

		}

	}

	private static function buildNameParametersSQL(){

		$nameParams='';
		foreach (static::$tableSchema as $columnName => $type) {
			
			$nameParams .= $columnName . '= :' . $columnName .','; 

		}
		return trim($nameParams,',');
	}
	private  function create(){

		

		$sql = 'INSERT INTO ' . static::$tableName .' SET ' . self::buildNameParametersSQL();
		$stmt = Database::init()->prepare($sql);
		$this->prepareValues($stmt);
	    if($stmt->execute()){
	    	$result = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,get_called_class());
	    	var_dump($result) ;
	    	//$this->{static::$primaryKey} = $result->id;

	    	return true;
	    }
	    return false;

	}
	private  function update(){

		


		$sql = 'UPDATE ' . static::$tableName .' SET ' . self::buildNameParametersSQL() .' WHERE ' . static::$primaryKey  .' = '. $this->{static::$primaryKey};
		$stmt = Database::init()->prepare($sql);
		$this->prepareValues($stmt);
	    return $stmt->execute();	

	}
	public function save(){
		return $this->{static::$primaryKey} === null ? $this->create() : $this->update();
	}

	public  function delete(){

		

		$sql = 'DELETE FROM ' . static::$tableName .' WHERE ' . static::$primaryKey  .' = '. $this->{static::$primaryKey};
		$stmt = Database::init()->prepare($sql);
	    return $stmt->execute();	

	}

	public static  function getAll(){

		

		$sql = 'SELECT * FROM '. static::$tableName;	
		$stmt = Database::init()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,get_called_class());
	    return (is_array($result) && !empty($result))  ? $result : false;	
	}


	public static  function getByPK($pk){


		

		$sql = 'SELECT * FROM '. static::$tableName .' WHERE ' . static::$primaryKey  .' = "'. $pk .'"';
		$stmt = Database::init()->prepare($sql);  
		if ($stmt->execute() === true) {
			if (method_exists(get_called_class(),'__construct')) {
				$obj = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,get_called_class(),array_keys(static::$tableSchema));
	     		
			}else{
		     	$obj = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,get_called_class());
		 
	    	 }

	    	 return !empty($obj) ? array_shift($obj) : false;

	     }
	     return false;  
	}

	public static  function get($sql,$options = array()){


			
		$stmt = Database::init()->prepare($sql);
	    if (!empty($options)) {
	     	
	     	foreach ($options as $columnName => $type) {
			
			if ($type[0] == 4 ) {
				
				$sentizeValue = filter_var($type[1],FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
				$stmt->bindValue(":{$columnName}",$sentizeValue);

			}else{

				$stmt->bindValue(":{$columnName}",$type[1],$type[0]);

			    }		

		    }
	     }
	     //var_dump($stmt);
	     //var_dump($options);
	    $stmt->execute();
		$result = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE,get_called_class(),array_keys(static::$tableSchema));
	    return (is_array($result) && !empty($result))  ? $result : false;
	       
	}

}