<?php include ('../../../system/main.php');?>
<h3> Manage Holidays</h3>
<hr />
<form method="post" name="editholiday" class="well">
	<input type="hidden" name="id" value="<?php echo $id;?>" />
	<label>Date</label>
	<?php echo $ui->calender_normal(array('name'=>'editdate', 'class'=>'required', 'value'=> $fw->holiday()->get($id)->date));?>
	
	<label>Holiday Type</label>
	<select name="type">
		<option>-select</option>
		<option selected="selected"><?php echo $fw->holiday()->get($id)->type?></option>
		<option>Poya</option>
		<option>Gov</option>
		<option>HNBA</option>
		<option>Special</option>
	</select>
	<label>Description</label>
		<?php echo $ui->input_text(array('name'=>'description', 'id'=>'description', 'hint'=>'Description About Holiday','class'=>'required', 'value'=> $fw->holiday()->get($id)->description));?>
	<p> <?php echo $ui->input_button_primary(array('name'=>'AddUser','type'=>'Submit','value'=>'Edit Holiday'));?></p>
</form>
<?php echo $ajax->submitForm(array('form'=>'editholiday','get'=>'#sys_message', 'do'=>'do_edit_holiday.php'));?>