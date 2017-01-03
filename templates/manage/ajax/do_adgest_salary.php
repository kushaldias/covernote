<?php include_once ('../../../system/main.php'); ?>
<?php
	if($fw->attendance()->adgestTime($_REQUEST)){
		return json_encode(array('status'=>true, 'message'=>'Done !'));
	} else {
		return json_encode(array('status'=>false, 'message'=>'Fail!! - Please check the updates'));
	}
?>