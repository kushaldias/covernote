<?php include ('../../../system/main.php'); ?>
<?php if($_SESSION['SUSERTYPE'] != 'ADMIN'){  exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>Your are not authorized to access this page.</h3>");}?>
<?php 
	if($fw->manage_users()->add($_REQUEST)){
		echo json_encode(array('status'=>true,'message'=>'Added New User.'));
	} else {
		echo json_encode(array('status'=>false,'message'=>'User Not Added.'));
	}
?>