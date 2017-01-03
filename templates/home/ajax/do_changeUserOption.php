<?php include ('../../../system/main.php'); ?>
<?php
	echo $fw->admin($_SESSION['USERID'])->userChangeOption($_POST['user'],$_POST['useroption']);
?>