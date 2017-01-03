<?php include ('../../../system/main.php');?>
<?php if($_SESSION['SUSERTYPE'] != 'ADMIN'){  exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>Your are not authorized to access this page.</h3>");}?>
<?php $userdetails = $fw->manage_users()->get($_REQUEST);?>
<h3>User Manager</h3>
<hr />

<form method="post" name="edituser" class="well">
	<input type="hidden" value="<?php echo $_REQUEST['id'];?>" name="id" />
	<p>Full Name</p>
	<p> <?php echo $ui->input_text(array('name'=>'fullname','value'=>$userdetails['fullname'],'hint'=>'User Full Name','class'=>'required'));?></p>
	<p>User Name</p>
	<p> <?php echo $ui->input_text(array('name'=>'username','value'=>$userdetails['username'],'hint'=>'User Name','class'=>'required'));?></p>
	
	<p>Password</p>
	<p> <?php echo $ui->input_password(array('name'=>'password','hint'=>'Password','class'=>'required', 'type'=>'password', 'id'=>'password'));?></p>

	<p>Limit</p>
        <p>
        	<select name="limit">
            	<option value="0 AND 1000">0 To 1000</option>
                <option value="1000 AND 10000">1000 To 10000</option>
                <option value="10000 AND 100000">10000 To 100000</option>
                <option value="10000 AND 1000000">100000 To 1000000</option>
                <option value="1000000 AND 10000000">1000000 To 10000000</option>
            </select>
     </p>
    <p>Signature</p>
	<p><img src="<?php echo UPLOAD_HTTP_FILE_PATH . $userdetails['signature'];?>" /></p>
    
 	 <label>Signature</label>
        <label>
        	<label id="modifythumbview"></label>
        	<input type="file" name="file" id="modifyfile" />
        	<?php echo $ajax->uploadify_multi_resizeimage_withwatermark('modifyfile','modifythumbview');?>
    </label>   
      		
	<p>Account Type</p>
	<p>
		<input type="radio" value="ACC_USER" name="accountrype" <?php echo ($userdetails['account_type']=='ACC_USER')? 'checked="checked"' : '';?>> Account Manager  <br />
		<input type="radio" value="AUTH" name="accountrype" <?php echo ($userdetails['account_type']=='AUTH')? 'checked="checked"' : '';?>> Author <br />
		<input type="radio" value="MANAGER" name="accountrype"  <?php echo ($userdetails['account_type']=='MANAGER')? 'checked="checked"' : '';?>> Manager <br />
		<input type="radio" value="EXCOMANAGER" name="accountrype" <?php echo ($userdetails['account_type']=='EXCOMANAGER')? 'checked="checked"' : '';?>> ExCo Manager <br />
		<input type="radio" value="ADMIN" name="accountrype" <?php echo ($userdetails['account_type']=='ADMIN')? 'checked="checked"' : '';?>> Administrator <br />

	</p>
	<p> <?php echo $ui->input_button_primary(array('name'=>'AddUser','type'=>'Submit','value'=>'Edit User'));?></p>
</form>
<?php echo $ajax->submitRelativePathForm(array('form'=>'edituser','get'=>'#sys_message', 'do'=>'do_edituser.php'));?>