<?php include ('../../../../system/main.php'); ?>
<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>#</th>
			<th>Date</th>
			<th>Description</th>
			<th>Type</th>
			<th>&nbsp;</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach($fw->holiday()->pagination($next) as $d){?>
			<tr>
				<td><?php echo $d['id'];?></td>
				<td><?php echo $d['date'];?></td>
				<td><?php echo $d['description'];?></td>
				<td><?php echo $d['type'];?></td>
				<td><a class="editholiday" href="<?php echo AJAX_PATH?>ui_do_editholiday.php?id=<?php echo $d['id'];?>">Edit</a></td>
			</tr>
			<?php }?>
		</tbody>
</table>
<?php echo $ajax->fancyBoxByClass('editholiday');?>