<?php
$page = stripslashes($_REQUEST['p']);
$title = stripslashes($_REQUEST['t']);
$id   = $_REQUEST['id'];
$node = stripcslashes($_REQUEST['node']);

//pagination
$n		= (int)$_REQUEST['next'];
//output_add_rewrite_var('previus',$page);
$next 	= (int)$_REQUEST['next'];
$template = ($_REQUEST['template'])? stripcslashes($_REQUEST['template']) : 'home';
?>