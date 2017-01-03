<?php include ('../../../system/main.php'); ?>
<?php
	echo $fw->admin($_SESSION['USERID'])->userChangeStatus($_POST['user']);
    echo $fw->admin($_SESSION['USERID'])->userChangePrintStatus($_POST['id']);
    echo $fw->admin($_SESSION['USERID'])->userChangePrintStatusNonMotor($_POST['id_non']);
?>
