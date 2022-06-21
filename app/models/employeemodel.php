<?php 

/**
 * 
 */
namespace PHPMVC\Models;

class EmployeeModel extends AbstractModel
{
	public $id;
	public $name;
	public $age;
	public $address;
	public $tax;
	public $salary;
	protected static $primaryKey ='id';
	protected static $tableName ='Employees';
	protected static $tableSchema = array(
		'name' =>self::DATA_TYPE_STR,
		'age' =>self::DATA_TYPE_INT,
		'address' =>self::DATA_TYPE_STR,
		'tax' =>self::DATA_TYPE_DECIMAL,
		'salary' =>self::DATA_TYPE_DECIMAL
	);




	public function getTableName(){
		return self::$tableName;
	}
}