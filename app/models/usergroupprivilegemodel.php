<?php 

/**
 * 
 */
namespace PHPMVC\Models;

class UserGroupprivilegeModel extends AbstractModel
{
    public $id;
	public $GroupId;
    public $PrivilegeId;

	protected static $primaryKey ='id';
	protected static $tableName ='app_users_groups_privileges';
	protected static $tableSchema = array(
        'id'            =>self::DATA_TYPE_INT,
		'GroupId'            =>self::DATA_TYPE_INT,
		'PrivilegeId'            =>self::DATA_TYPE_INT

	);




}