<?php
namespace PHPMVC;

use PHPMVC\LIB\frontcontroller;

use PHPMVC\LIB\Language;
use PHPMVC\LIB\Template;


require_once '../app/config/config.php';
require_once APP_PATH . DS . 'lib' . DS . 'Autoload.php';
$template_parts = require_once '../app/config/templateconfig.php';

//var_dump( $template_parts);

session_start();

$template = new Template($template_parts);
$language = new Language();

$frontcontroller = new frontcontroller($template,$language);
$frontcontroller->dispath();
