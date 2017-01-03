<?php
if($_REQUEST['status']=='yes'){
	$fw->reader()->setPublish();
	echo $fw->reader()->jQueryMessage('Done', TRUE);
} else if ($_REQUEST['status']=='no') {
	echo $fw->reader()->jQueryMessage('Done', FALSE);
}
?>
<h3>View Data</h3>
<form method="post" name="frmview">
	<p>Select Type</p>
	<p>
		<select name="type" class="required">
			<option value="">-select-</option>
			<option value="REDCROSS">Red cross</option>
			<option value="NONREDCROSS">Non Red Cross</option>
		</select>
	</p>
	<p>Update Label Date</p>
	<p>
	<select name="label" class="required">
		<option value="">-select-</option>
	</select>
	</p>
	<p><?php echo $ui->input_button_primary(array('type'=>'submit','name'=>'submit','value'=>'View'))?> &nbsp;
</form>
<?php echo $ajax->populateParentsChilds(array('parent'=>'type', 'child'=> 'label', 'do'=>'do_json_label.php'));?>
<?php echo $ajax->loadPage(array('form'=>'frmview','do'=>'ui_view.php','get'=>'#result'));?>
<div id="result"></div>
