<?php include ('../../../../system/main.php'); ?>
<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Code</th>
			<th>&nbsp;</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach($fw->meta()->pagination($next) as $d){?>
			<tr>
				<td><?php echo $d['id'];?></td>
				<td><?php echo $d['name'];?></td>
				<td><?php echo $d['code'];?></td>
				<td><a class="editmeta" href="<?php echo AJAX_PATH?>ui_do_editmeta.php?id=<?php echo $d['id'];?>">Edit</a></td>
			</tr>
			<?php }?>
		</tbody>
</table>
<?php echo $ajax->fancyBoxByClass('editmeta');?>