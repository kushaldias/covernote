<h3>Add</h3>
<form method="post" action="" name="newvehicle">
	<p>Modal</p>
	<p> 
		<select name="modal">
			<option>-select-</option>
			<?php foreach($fw->meta()->getByCode('Modal') as $d){?>
				<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
			<?php }?>
		</select>
	</p>
	
	<p>Engin Capacity</p>
	<p> 
		<select name="engincapacity">
			<option>-select-</option>
			<?php foreach($fw->meta()->getByCode('Engin Capacity') as $d){?>
				<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
			<?php }?>
		</select>
	</p>
	
	<p>Manufacture Year</p>
	<p> 
		<select name="engincapacity">
			<option>-select-</option>
			<?php foreach($fw->meta()->getByCode('Manufacture Year') as $d){?>
				<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
			<?php }?>
		</select>
	</p>
	
	<p>Transmission</p>
	<p> 
		<select name="engincapacity">
			<option>-select-</option>
			<?php foreach($fw->meta()->getByCode('Transmission') as $d){?>
				<option value="<?php echo $d['id'];?>"><?php echo $d['name'];?></option>
			<?php }?>
		</select>
	</p>
	
	<p>Title</p>
	<p><input type="text" name="title" value="" /></p>
	
	<p>Price</p>
	<p><input type="text" name="price" value="" /></p>
	
	<hr />
	
	<ul class="thumbnails" id="files"></ul>
	<p><input type="file" name="upload" id="upload" /></p>
	
	<p> <?php echo $ui->input_button_primary(array('name'=>'Submit','value'=>'Submit','type'=>'submit'));?></p>
</form>
<?php echo $ajax->uploadify_multi_resizeimage_withwatermark('upload','files');?>
<?php echo $ajax->submitForm(array('form'=>'newvehicle','do'=>'do_addvehicle.php', 'get'=>'#sys_message'));?>