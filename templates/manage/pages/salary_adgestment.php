<h3>Attendance</h3>
<hr />
	<form method="post" action="" name="newvehicle" class="well">
		<input type="text" name="year" value="<?php echo date('Y');?>"/>
		<p>Month</p> 		
		<p>	<select name="month">
				<?php foreach($fw->meta()->getMonths() as $m){?>
					<option value="<?php echo $m['id']?>"><?php echo $m['name'];?></option> 	
				<?php }?>
			</select>
		</p>
		<p>By Epf</p> 		
		<p><?php echo $ui->input_text(array('name'=>'searchepf','id'=>'epf'));?></p>
		<p><?php echo $ui->input_button_primary(array('name'=>'search', 'value'=>'Search','type'=>'submit'));?></p>
	</form>
	<?php  
		$start_working = $fw->user_informations($_REQUEST['searchepf'])->getSalaryInformations()->working_hrs_start;
		$end_working = $fw->user_informations($_REQUEST['searchepf'])->getSalaryInformations()->working_hrs_end;
		$fullname = $fw->user_informations($_REQUEST['searchepf'])->getSalaryInformations()->fullname;
	?>
	
	<div class="well well-small">
		<table class="table">
			<thead>
			<tr>
				<th>Full Name</th>
				<th>Time In</th>
				<th>Time Out</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td><?php echo $fullname;?></td>
				<td><?php echo $start_working;?></td>
				<td><?php echo $end_working;?></td>
			</tr>
			</tbody>
		</table>
	</div>
	
<table class="table">
	<thead>
	<tr>
		<th><i class="icon-calendar"></i> Day</th>
		<th><i class="icon-calendar"></i> Date</th>
		<th><i class="icon-time"></i> Time In</th>
		<th><i class="icon-time"></i> Time Out</th>
		<th><i class="icon-calendar"></i> Day Details</th>
		<th><i class="icon-time"></i> Total Hrs</th>
		<th>OT Calculation</th>
	</tr>
	</thead>
	<tbody>
		<tr class="<?php echo $fw->attendance()->holidayStatus($d['dayname'], $d['day'])->css_color;?>">
		<?php foreach($fw->calander()->genarateMonthCalender($_REQUEST['month'],$_REQUEST['year'], $fw->attendance($_REQUEST)->get()) as $d){?>
			<td><?php echo $d['dayname'];?></td>
			<td><?php echo $d['day'];?></td>
			<td>
				<a title="<?php echo $start_working;?>" class="inline_edit_in_time" href="<?php echo $d['id'];?>"><?php echo $d['in_time'];?></a>
			</td>
			<td>
				<a title="<?php echo $end_working;?>" class="inline_edit_out_time" href="<?php echo $d['id'];?>"><?php echo $d['out_time'];?></a>
			</td>
			<td>	<span class="label label-important">
						<?php echo $fw->attendance()->dayStatus($d['hours'],$d['dayname'], $d['day']);?> 
					</span> &nbsp;
					<?php if($fw->attendance()->holidayStatus($d['dayname'], $d['day'])->description !=""){?>
					<span class="label label-inverse">
						<?php echo $fw->attendance()->holidayStatus($d['dayname'], $d['day'])->description;?>
					</span>
					<?php }?>
			</td>
			<td>
				<?php if($d['total_time']!=''){?>
					<span class="label label-inverse">
						<?php echo $d['total_time'];?>
					</span>
				<?php } else {?>
						00:00:00
				<?php }?>
			</td>
			<td>
				<?php if($fw->calander()->sum_the_time($d['total_ot_hour_start'],$d['total_ot_hour_end']) != '00:00:00'){?>
					<span class="label label-inverse">
						<?php echo $d['total_ot_hour_start'];?> + <?php echo $d['total_ot_hour_end'];?>
					</span>
					&nbsp;
					<span class="label label-info">
						<a class="totalOtTime" style="color:white;" href="<?php echo $d['id'];?>">
							<?php if($d['total_ot_time']=='00:00:00'){?>
									<?php echo $fw->calander()->sum_the_time($d['total_ot_hour_start'],$d['total_ot_hour_end']);?>
							<?php } else {?>
									<span class="label label-warning"><?php echo $d['total_ot_time'];?></span>
							<?php }?>
						</a>
					</span>
					&nbsp;
					<a class="ot" href="<?php echo $d['id'];?>"><?php echo $ot_status[$d['is_ot']];?></a>
				<?php }?>
			</td>
		</tr>
	<?php }?>
	</tbody>
</table>
<?php echo $ajax->editable(array('element'=>'.inline_edit_in_time','type'=> 'text', 
								 'params'=> array('epf'=>$_REQUEST['searchepf'],'table'=>'attendance', 'field'=>'in_time'), 
								 'title'=> 'Adjust In Time.',
								 'do'=> 'do_adgest_salary.php'));?>
<?php echo $ajax->editable(array('element'=>'.inline_edit_out_time','type'=> 'text', 
								 'params'=> array('epf'=>$_REQUEST['searchepf'],'table'=>'attendance', 'field'=>'out_time'), 
								 'title'=> 'Adjust Out Time.',
								 'do'=> 'do_adgest_salary.php'));?>

<?php echo $ajax->editable(array('element'=>'.ot','type'=> 'select',
								 'source'=> $ot_status,
								 'params'=> array('epf'=>$_REQUEST['searchepf'],'table'=>'attendance', 'field'=>'is_ot'), 
								 'title'=> 'Set OT.',
								 'do'=>'do_adgest_salary.php'));?>
								 
<?php echo $ajax->editable(array('element'=>'.totalOtTime','type'=> 'text',
								 'params'=> array('epf'=>$_REQUEST['searchepf'],'table'=>'attendance', 'field'=>'total_ot_time'), 
								 'title'=> 'Set Time',
								 'do'=>'do_adgest_salary.php'));?>								 