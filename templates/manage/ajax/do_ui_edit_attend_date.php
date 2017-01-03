<?php include ('../../../system/main.php');?>
<?php $id = (int)$_REQUEST['id'];?>

<div class="alert">Edit Time Attend</div>
<form method="post" name="editattendance">
	<table class="table">
		<thead>
			<tr>
				<th>Time In</th>
				<th>Time Out</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<td><?php echo $ui->calender_with_time(array('name'=>'timein','value'=>''));?></td>
			<td><?php echo $ui->calender_with_time(array('name'=>'timeout','value'=>''));?></td>
			<td><input type="submit" class="btn" name="btn" value="Edit" /></td>
		</tbody>
	</table>
</form>
<?php echo $ajax->submitForm(array('form'=>'editattendance', 'do'=> 'do_edit_attendance.php', 'get'=>'#sys_message'));?>