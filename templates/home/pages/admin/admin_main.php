
<!-- End Header and Nav -->
<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home</a></li>
        </ul>
    </div>
</div>    
      
      
<div class="row">
	<h2 class="subheader offset-by-five">All Users</h2>
</div>
      

      
<div class="row">  
<div class="twelve columns">
	<div class="row">        
	<?php  include_once ('left_menu.php');?>
<!---------- End Nav and Banner ------------------------->      
      
    <form method="post" name="add" action="admin_main.html"> 
 	
  <div class="ten columns"> 
        	<table class="table table-bordered">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="150">Admin Name</th>
                        <th width="80">User Type</th>
                        <th width="60">Status</th>
                        <th width="50">Edit</th>
                        <th width="100">Change Status</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->admin($_SESSION['USERID'])->getAllUsers(1) as $v){?>
        			<tr>
                    	<td><?php echo $v['idusers'];?></td>
                        <td><?php echo $v['agentName'];?></td>  
                        <td><span class="label label-default">Admin</span></td>                      
                        <td><?php if($v['userstatus'] == '1'){?> <span class="label label-success">Active</span> <?php } else { ?> <span class="label label-danger">In-Active</span> <?php } ?></td>
                        <td><a href="editUser.html?uid=<?php echo $v['idusers']; ?>" class="btn btn-default" style="margin-left:10px" ><i class="glyphicon glyphicon-edit"></a></td>
                        <td><a onclick="changeStatus(<?php echo $v['idusers'];?>)" class="btn btn-primary" style="margin-left:30px;"><i class="glyphicon glyphicon-transfer"></a></td>           
                        
			   <?php }?>	
				</tbody>
			</table>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="150">Agent Name</th>
                        <th width="80">User Type</th>
                        <th width="60">Status</th>
                        <th width="50">Edit</th>
                        <th width="100">Change Status</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->admin($_SESSION['USERID'])->getAllUsers(2) as $v){?>
        			<tr>
                    	<td><?php echo $v['idusers'];?></td>
                        <td><?php echo $v['agentName'];?></td>  
                        <td><span class="label label-info">Agent</span></td>                      
                        <td><?php if($v['userstatus'] == '1'){?> <span class="label label-success">Active</span> <?php } else { ?> <span class="label label-danger">In-Active</span> <?php } ?></td>
                        <td><a href="editUser.html?uid=<?php echo $v['idusers']; ?>" class="btn btn-default" style="margin-left:10px" ><i class="glyphicon glyphicon-edit"></a></td>
                        <td><a onclick="changeStatus(<?php echo $v['idusers'];?>)" class="btn btn-primary" style="margin-left:30px;"><i class="glyphicon glyphicon-transfer"></a></td>           
                        
			   <?php }?>	
				</tbody>
			</table>
            
            
            
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="150">Branch Name</th>
                        <th width="80">User Type</th>
                        <th width="60">Status</th>
                        <th width="50">Edit</th>
                        <th width="100">Change Status</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->admin($_SESSION['USERID'])->getAllUsers(3) as $v){?>
        			<tr>
                    	<td><?php echo $v['idusers'];?></td>
                        <td><?php echo $v['agentName'];?></td>  
                        <td><span class="label label-warning">Branch</span></td>                      
                        <td><?php if($v['userstatus'] == '1'){?> <span class="label label-success">Active</span> <?php } else { ?> <span class="label label-danger">In-Active</span> <?php } ?></td>
                        <td><a href="editUser.html?uid=<?php echo $v['idusers']; ?>" class="btn btn-default" style="margin-left:10px" ><i class="glyphicon glyphicon-edit"></a></td>
                        <td><a onclick="changeStatus(<?php echo $v['idusers'];?>)" class="btn btn-primary" style="margin-left:30px;"><i class="glyphicon glyphicon-transfer"></a></td>           
                        
			   <?php }?>	
				</tbody>
			</table>
        </div>
	</div>  
    
    
</div>    
	</div>
</form>

<script>

function changeStatus(id){
	$.post("<?php echo AJAX_PATH;?>do_changeUserStatus.php",{user : id},
		function(policy_number){
			location.reload(); 			
			}
		)				
	}	

</script>
