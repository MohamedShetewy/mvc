<?php 

/**
 * 
 */
namespace PHPMVC\Models;

class UserGroupModel extends AbstractModel
{
	public $GroupId;
	public $GroupName;

	protected static $primaryKey ='GroupId';
	protected static $tableName ='app_users_groups';
	protected static $tableSchema = array(
        'UserId'            =>self::DATA_TYPE_INT,
		'GroupName'          =>self::DATA_TYPE_STR

	);




}