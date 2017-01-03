<?php include ('../../../system/main.php'); ?>
<?php
	echo $fw->admin($_SESSION['USERID'])->userChangePrintStatus($_POST['user']);
?>