<?php include ('../../../system/main.php');?>
<?php 
if($fw->holiday()->edit($_REQUEST)){
	echo json_encode(array('status'=>true,'message'=>'Updated Holiday.'));
} else {
	echo json_encode(array('status'=>false,'message'=>'Not Updated Holiday.'));
}
?>