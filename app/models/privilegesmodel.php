<?php 

/**
 * 
 */
namespace PHPMVC\Models;

class privilegesModel extends AbstractModel
{
	public $PrivilegeId;
	public $Privilege;
    public $PrivilegeTitle;

	protected static $primaryKey ='PrivilegeId';
	protected static $tableName ='app_users_privileges';
	protected static $tableSchema = array(
        'PrivilegeId'            =>self::DATA_TYPE_INT,
		'PrivilegeTitle'              =>self::DATA_TYPE_STR,
		'Privilege'              =>self::DATA_TYPE_STR

	);




}