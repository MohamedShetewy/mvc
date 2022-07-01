<?php

if (!define('DS', DIRECTORY_SEPARATOR)) {
    define('DS', DIRECTORY_SEPARATOR);
}

define('APP_PATH',realpath(dirname( __FILE__)) . DS . '..' );


define('VIEW_PATH',APP_PATH . DS .'views' . DS);


define('VIEW_db',APP_PATH . DS .'lib'. DS);


define('TEMPLATE_PATH',APP_PATH . DS . 'template' . DS);

define('LANGUAGES_PATH',APP_PATH . DS .'languages' .DS);


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
defined('APP_DEFAULT_LANGUAGE')     ? null : define ('APP_DEFAULT_LANGUAGE', 'ar');

//Session configration

defined('SESSION_NAME')   ?      null : define ('SESSION_NAME', '_ESTORE_SESSION');
defined('SESSION_LIFE_TIME')   ? null : define ('SESSION_LIFE_TIME', 0 );
defined('SESSION_SAVE_PATH')   ? null : define ('SESSION_SAVE_PATH', APP_PATH . DS . '..' . DS . 'sessions' );




