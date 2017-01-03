<?php include_once ('../system/main.php');?>
<?php
	$fw->calander();
	echo $function = 'F2';
	echo date('Y-m-d H:i:s', time());
	switch($function){
		case 'F1':	$fw->biometric()->F1(array('epf'=>1105,'date'=>date('Y-m-d H:i:s'))); break;
		case 'F2':	$fw->biometric()->F2(array('epf'=>1105,'date'=>date('Y-m-d H:i:s'))); break;
		default: return FALSE;
	}
?>