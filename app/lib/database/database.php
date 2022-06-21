<?php


namespace PHPMVC\lib\Database;

/**
 * 
 */
class Database 
{

     private static $_instance;
	 private static $_con;

	function __call($name, $arguments)
	{
		return call_user_func_array(array(&self::$_con, $name), $arguments);
		
	}

	public static function init(){


		
		try {
			 
			$_con = new \PDO('mysql:host=localhost;dbname=php_pdo','root','',array(
				\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				\PDO::ATTR_ERRMODE=> \PDO::ERRMODE_EXCEPTION
			));

		} catch (\PDOException $e) {
			echo $e->getMessage();
		}

		return $_con;

	}


    public static function getInstance()
    {
        if(self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}



