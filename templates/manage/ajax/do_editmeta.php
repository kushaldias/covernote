<?php include ('../../../system/main.php');?>
<?php 
if($fw->meta()->edit($_REQUEST)){
	echo json_encode(array('status'=>true,'message'=>'Update Meta.'));
} else {
	echo json_encode(array('status'=>false,'message'=>'Not Updated.'));
}
?>