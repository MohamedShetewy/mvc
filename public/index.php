<?php
namespace PHPMVC;

use PHPMVC\LIB\frontcontroller;

use PHPMVC\LIB\Language;
use PHPMVC\LIB\SessionManager;
use PHPMVC\LIB\Template;


require_once '../app/config/config.php';
require_once APP_PATH . DS . 'lib' . DS . 'Autoload.php';
$template_parts = require_once '../app/config/templateconfig.php';

$session = new SessionManager;

$session->start();



if (!isset($_SESSION['lang'])){
    $_SESSION['lang'] = APP_DEFAULT_LANGUAGE;

}


$template = new Template($template_parts);
$language = new Language();

$frontcontroller = new frontcontroller($template,$language);
$frontcontroller->dispath();
