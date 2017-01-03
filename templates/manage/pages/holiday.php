<h3> Manage Holidays</h3>
<hr />
<form method="post" name="addholiday" class="well">
	<label>Date</label>
	<?php echo $ui->calender_normal(array('name'=>'date', 'class'=>'required'));?>
	
	<label>Holiday Type</label>
	<select name="type">
		<option>-select</option>
		<option>Poya</option>
		<option>Gov</option>
		<option>HNBA</option>
		<option>Special</option>
	</select>
	<label>O/T Rate (Per Hrs)</label>
	<input type="text" name="ot_rate" id="ot_rate" value="" />
	<label>Description</label>
		<?php echo $ui->input_text(array('name'=>'description', 'id'=>'description', 'hint'=>'Description About Holiday','class'=>'required'));?>
	<p> <?php echo $ui->input_button_primary(array('name'=>'AddUser','type'=>'Submit','value'=>'Add Holiday'));?></p>
</form>
<?php echo $ajax->submitForm(array('form'=>'addholiday','get'=>'#sys_message', 'do'=>'do_addholiday.php'));?>

<h3>Holidays</h3>
<hr />

<div class="pagination"></div>
<div class="pagecontent"></div>

<?php echo $ajax->bootpage(array('content'=>'.pagecontent','pagination'=> '.pagination', 'do'=>'ui_holiday.php','total'=> $fw->holiday()->total()));?>
<?php echo $ajax->setAutoSize('description',200,400);?>
<?php echo $ajax->mask('ot_rate','9999.99?');?>