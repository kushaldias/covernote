<?php
switch($_SESSION['SUSERTYPE']){
	case 'admin': 		include_once ('admin/admin_main.php');			break;
	case 'agent': 		include_once ('agent/agent_main.php');			break;
    case 'branch': 		include_once ('branch/branch_main.php');		break;
	
	default : 		exit('not implimented!');				break;
}
?>