<?php if($_SESSION['SUSERTYPE'] != 'ADMIN'){  exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>Your are not authorized to access this page.</h3>");}?>
<h3>Genarate Payments</h3>
<hr />
<form method="post" name="adduser" class="well">
		<label>EPF</label>
		<?php echo $ui->input_text(array('name'=>'epf','hint'=>'EPF','class'=>'required'));?>
		<p>	<select name="month" class="span1">
				<?php foreach($fw->meta()->getMonths() as $m){?>
					<option value="2013-<?php echo $m['id']?>"><?php echo $m['name'];?></option> 	
				<?php }?>
			</select>
		</p>
		<p>
			<?php echo $ui->input_button_primary(array('name'=>'Genarate','type'=>'Submit','value'=>'Genarate'));?>
		</p>
</form>
<?php 
$result = $fw->attendance(array('epf'=>$_REQUEST['epf']))->genarateAttendanceByMonth($_REQUEST);
?>
<!-- Payment Slip  -->
<h3>Salary Information</h3>
<table class="table">
	<thead>
		<tr>
			<th>Basic Salary</th>
			<th>Normal O/T Total</th>
			<th>Exeed O/T Total</th>
			<th>Total O/T</th>
		</tr>
		<tr>
			<td><?php echo $result['informations']->basicsalary;?></td>
			<td><?php echo $result['sum_normal_ot'];?></td>
			<td><?php echo $result['sum_exeed_ot'];?></td>
			<td><?php echo $result['total_ot_values'];?></td>
		</tr>
	</thead>
</table>
<hr />
<h3>Allwances</h3>
<table class="table">
	<thead>
		<?php foreach($fw->user_informations($_REQUEST['epf'])->getAllowances() as $d){?>
		<tr>
			<th><?php echo $d['name'];?></th>
			<td><?php echo $d['value'];?></td>
		</tr>
			<?php $totalAllowances += $d['value'];?>
		<?php }?>
	</thead>
	<tbody>
		<tr>
			<td>Total Allwances</td>
			<td><?php echo $totalAllowances;?></td>
		</tr>
	</tbody>
</table>

<h3>Total Salary</h3>
<table class="table">
	<thead>
		<tr>
			<th>Basic Salary</th>
			<td><?php echo $result['informations']->basicsalary;?></td>
		</tr>
		<tr>
			<th>Normal O/T Total</th>
			<td><?php echo $result['sum_normal_ot'];?></td>
		</tr>
		<tr>
			<th>Extra O/T Total</th>
			<td><?php echo $result['sum_exeed_ot'];?></td>
		</tr>
		<tr>
			<th>Total Allwances</th>
			<td><?php echo $totalAllowances;?></td>
		</tr>
		
		<tr>
			<th>Total Salary</th>
			<th><?php echo $result['informations']->basicsalary + $result['sum_normal_ot'] +
							$result['sum_exeed_ot'] + $totalAllowances;?></th>
		</tr>
	</thead>
</table>

<b>Your Total Working <?php echo  $result['informations']->normal_working_hrs_permonth;?> Hrs</b>
<b><font color="red">coverd <?php echo  $result['sum_hours'];?> Hrs only</font></b>