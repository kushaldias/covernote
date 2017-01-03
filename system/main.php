<?php
error_reporting (1);

define ( 'FW_REPORTS', 0);

session_start ();

define ( 'SYSTEM_PATH', '/var/www/html/covernote/' );
define ( 'SYSTEM_CLASS_PATH', SYSTEM_PATH . 'class/');

include_once (SYSTEM_PATH . 'system/requests.php'); // system configs
include_once (SYSTEM_PATH . 'system/conf.php'); // system configs
include_once (SYSTEM_PATH . 'class/fw.php');

//default class loader
$fw = new FW(array('db'=>'db','ui'=>'ui','ajax'=>'ajax', 'db_oci'=>'db_oci'));
$ui = new UI();
$ajax = new Ajax();
?>