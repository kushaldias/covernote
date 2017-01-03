<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home - Branch</a></li>
            <li><a href="#">Users</a></li>
            <li style="float:right; color:#000;"><a href="#">Welcome <b><?php echo $fw->agent($_SESSION['USERID'])->get_username_by_id($_SESSION['USERID']); ?></b></a></li>
        </ul>        
    </div>
</div>    
      
      
<div class="row">
	<h3 class="subheader offset-by-five">Branch Users</h3>
</div>



<div class="row">  
    <div class="twelve columns">
        <div class="row">
            <?php  include_once ('branch_menu.php');?>
    
            <div class="ten columns"> 
        
                <form method="post" name="add" action="branch_main.html"> 
                <table class="table table-bordered">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="150">Agent Name</th>
                        <th width="70">Type</th>
                        <th width="50">Status</th>
                        <th width="40">Edit</th>
                        <th width="100">Change Status</th>
                        <th width="50">Certificates</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->admin($_SESSION['USERID'])->geBranchUsers($_SESSION['USERID']) as $v){?>
                    <tr>
                    	<td><?php echo $v['idusers'];?></td>
                        <td><?php echo $v['agentName'];?></td>  
                        <td><span class="label label-info">Agent</span></td>                      
                        <td><?php if($v['userstatus'] == '1'){?> <span class="label label-success">Active</span> <?php } else { ?> <span class="label label-danger">In-Active</span> <?php } ?></td>
                        <td><a href="editUserBranch.html?uid=<?php echo $v['idusers']; ?>" class="btn btn-default" style="margin-left:10px" >Edit  <i class="glyphicon glyphicon-edit"></a></td>
                        <td><a onclick="changeStatus(<?php echo $v['idusers'];?>)" class="btn btn-primary" style="margin-left:30px;"><i class="glyphicon glyphicon-transfer"></a></td>    
                        <td><a href="certificatesByBranch.html?id=<?php echo $v['idusers']; ?>" class="btn btn-default" style="margin-left:10px" >View  <i class="glyphicon glyphicon-list-alt"></a></td>
                        <?php }?>	
		</tbody>
		</table>
                </form>
                
              
            </div> 	
        </div>    
    </div>
</div>

<script type="text/javascript">

function changeStatus(id){
	$.post("<?php echo AJAX_PATH;?>do_changeUserStatus.php",{user : id},
		function(policy_number){
			location.reload(); 			
			}
		)				
	}	

</script>