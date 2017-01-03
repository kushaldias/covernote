<?php if($fw->manage_users()->isLogin()==FALSE){?>
<h3>Login</h3>
<br />
<form method="post" action="?node=home" name="login">
	<p> <?php echo $ui->input_text(array('name'=>'username','hint'=>'User Name','class'=>'required'));?></p>
	<p> <?php echo $ui->input_password(array('name'=>'password','hint'=>'Password','class'=>'required'));?></p>
	<p> <?php echo $ui->input_button_primary(array('name'=>'btnlogin','value'=>'Login','type'=>'submit'));?></p>
</form>
<?php } else {?>
	<?php include_once('view.php');?>
<?php }?>