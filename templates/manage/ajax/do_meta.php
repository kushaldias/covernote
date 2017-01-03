<?php include ('../../../system/main.php');?>
<?php 

	if($fw->meta()->add($_REQUEST)){
		echo json_encode(array('status'=>true,'message'=>'Meta Added.'));
	} else {
		echo json_encode(array('status'=>false,'message'=>'Meta Not Added.'));
	}
?>