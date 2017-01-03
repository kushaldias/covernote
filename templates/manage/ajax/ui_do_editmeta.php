<?php include ('../../../system/main.php');?>
<?php if($_SESSION['SUSERTYPE'] != 'ADMIN'){  exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>Your are not authorized to access this page.</h3>");}?>
<?php $editmeta = $fw->meta()->get($_REQUEST['id']); $editmeta = $editmeta[0];?>
<h3>User Manager</h3>
<hr />

<form method="post" name="editmeta">
	<input type="hidden" value="<?php echo $_REQUEST['id'];?>" name="id" />
	<p>Name</p>
	<p> <?php echo $ui->input_text(array('name'=>'name','value'=>$editmeta['name'],'hint'=>'Name','class'=>'required'));?></p>
	<p>Code</p>
	<p>
		<?php foreach($fw->meta()->getCode() as $c){?>
			<input <?php echo ($c['code'] == $editmeta['code'])? 'checked="checked"' :'';?> type="radio" value="<?php echo $c['code'];?>" name="code"> <?php echo $c['code'];?>  <br />
		<?php }?>
	</p>

	<p> <?php echo $ui->input_button_primary(array('name'=>'EditMeta','type'=>'Submit','value'=>'Edit Meta'));?></p>
</form>
<?php echo $ajax->submitForm(array('form'=>'editmeta','get'=>'#sys_message', 'do'=>'do_editmeta.php'));?>