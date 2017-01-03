<?php if($_SESSION['SUSERTYPE'] != 'ADMIN'){  exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>Your are not authorized to access this page.</h3>");}?>
<h3>User Manager</h3>
<hr />
<form method="post" name="adduser" class="well">
		<legend>Login Informations</legend>
		
        <p>Full Name</p>
        <p>
        	<input type="text" value="" name="fullname" id="name" />
        </p>
		<p>EPF</p>
		<p> <?php echo $ui->input_text(array('name'=>'epf','hint'=>'EPF','class'=>'required'));?></p>
		
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
		<p>User Name</p>
		<p> <?php echo $ui->input_text(array('name'=>'username','hint'=>'User Name','class'=>'required'));?></p>
		<p>Password</p>
		<p> <?php echo $ui->input_password(array('name'=>'password','hint'=>'Password','class'=>'required', 'type'=>'password', 'id'=>'password'));?></p>
	
		<p>Re-Password</p>
		<p> <?php echo $ui->input_password(array('name'=>'password2','equalto'=>'#password' ,'value'=>'','hint'=>'Password', 'type'=>'password'));?></p>
		
		<p>Account Type</p>
		<p>
			<input type="radio" value="ACC_USER" name="accountrype"> Accounts User  <br />
			<input type="radio" value="AUTH" name="accountrype"> Author  <br />
			<input type="radio" value="MANAGER" name="accountrype"> Manager  <br />
            <input type="radio" value="MANAGER" name="accountrype"> EXCOMANAGER  <br />
			<input type="radio" value="ADMIN" name="accountrype"> Administrator  <br />
			<input type="radio" value="NOLOG" name="accountrype"> No Access <br />
		</p>
        
        <label>Signature</label>
        <label>
        	<label id="thumbview" class="btn"></label>
        	<input type="file" name="file" id="file" />
        	<?php echo $ajax->uploadify_multi_resizeimage_withwatermark('file','thumbview');?>
        </label>
        
        <input type="submit" class="btn btn-primary" name="submit" value="Register" />
</form>
<?php echo $ajax->submitForm(array('form'=>'adduser','get'=>'#sys_message', 'do'=>'do_adduser.php'));?>
<?php echo $ajax->setAutoSize('name',200,400);?>
<h3>Users</h3>

<hr />

<div class="pagination"></div>
<div class="pagecontent"></div>
<?php echo $ajax->bootpage(array('content'=>'.pagecontent','pagination'=> '.pagination', 'do'=>'ui_users.php','total'=> $fw->manage_users()->total()));?>