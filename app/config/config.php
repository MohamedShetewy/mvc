<?php

if (!define('DS', DIRECTORY_SEPARATOR)) {
    define('DS', DIRECTORY_SEPARATOR);
}

define('APP_PATH',realpath(dirname( __FILE__)) . DS . '..' );


define('VIEW_PATH',APP_PATH . '\views\\');


define('VIEW_db',APP_PATH . '\lib\\');


define('TEMPLATE_PATH',APP_PATH . '\template\\');



define('CSS','/mvc/public/css/');
define('JS','/mvc/public/js/');

define('P_PATH',realpath(dirname( __FILE__)));

// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'storedb');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);

