<?php

//------------------------------- Create New user -------------------------------------
	if($_REQUEST['createUser']){		
		if($fw->admin($_SESSION['USERID'])->createUser($_REQUEST)){
			echo $fw->admin($_SESSION['USERID'])->jQueryMessage('New User Created !');
		} else {
			echo $fw->admin($_SESSION['USERID'])->jQueryMessage('Not Created !!');
		}
	}
//-------------------------------------------------------------------------------------
?>
<!-- End Header and Nav -->
<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home</a></li>
            <li><a href="#">Edit User</a></li>
        </ul>
    </div>
</div>    
      
      
<div class="row">
	<h2 class="subheader offset-by-four">Update User Details</h2>
</div>
      

      
<div class="row">  
	<div class="twelve columns">
		<div class="row">        
		<?php  include_once ('left_menu.php');?>
<!---------- End Nav and Banner ------------------------->      
      
    <form method="post" name="updateUser" action="updateUser.html"> 
 		<?php $user = $fw->admin($_SESSION['USERID'])->get_username_by_id($_GET['uid']);?>
        <?php $userOption = $fw->admin($_SESSION['USERID'])->getUserOption($_GET['uid']);?>
  		<div class="ten columns"> 
        	<div class="panel panel-default" style="background-color:#FFF">
            	
   					<div class="row">                    	
                      <div class="col-sm-6"><h5><i class="glyphicon glyphicon-hand-right" style="padding-right:10px;"></i>User Details</h5></div>            
                  	</div> 
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">Agent / Admin Name :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="name" id="name" type="text" value="<?php echo $user[0]['agentName']; ?>" required />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">User Name :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="userName" id="userName" type="text" value="<?php echo $user[0]['userName']; ?>" required />	
                     	</div>
                        <div class="col-sm-3"><label style="margin-top:10px;">Password :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="passWord" id="passWord" type="password" value="<?php echo $user[0]['Password']; ?>" required />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">email :</label></div>
                      	<div class="col-sm-5">
                      		<input style="font-weight:700;" name="email" id="email" type="text" placeholder="someone@gmail.com" value="<?php echo $user[0]['email']; ?>" required />	
                     	</div>
                    </div>
                    
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">Account Created on :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" type="text" placeholder="someone@gmail.com" value="<?php echo $user[0]['dateCreated']; ?>" required />	
                     	</div>
                    </div>
                    
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                    
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">User Type :</label></div>
                        <?php $userType = $user[0]['userRoles_iduserRoles']; ?>
                      	<div class="col-sm-3">
                        <?php 	if($userType==1){ ?>
                        	<span class="label label-danger" style="font-size:26px;">Admin</span>
                        <?php } if($userType==2){ ?>
                        	<span class="label label-success" style="font-size:26px;">Agent</span>
                        <?php } if($userType==3){ ?>
                        	<span class="label label-warning" style="font-size:26px;">Branch</span>
                        <?php } ?>    
                     	</div>
                        <?php 	if($userType==2){ ?>
                        <div class="col-sm-3"><label style="margin-top:10px;">Agent Code :</label></div>
                      	<div class="col-sm-3"><input style="font-weight:700;" name="code" id="code" type="text" value="<?php echo $user[0]['code']; ?>" /></div>
                        <?php } if($userType==3){ ?>
                        <div class="col-sm-3"><label style="margin-top:10px;">Branch Code :</label></div>
                      	<div class="col-sm-3"><input style="font-weight:700;" name="code" id="code" type="text" value="<?php echo $user[0]['code']; ?>" /></div>
                        <?php } ?> 
                    </div>
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                    <?php 	if($userType==2){ ?>
                  	<div class="row" id="optionrow_b">                    	
                      <div class="col-sm-6"><h5><i class="glyphicon glyphicon-hand-right" style="padding-right:10px;"></i>Agent Options</h5></div>            
                  	</div> 
                    
                    <?php $userOptionV = $userOption[0]['optionDateBackDate']; ?>
                    <div class="row" id="optionrow">
                    	<div class="col-sm-3"><label style="margin-top:10px;">Date BackDate :</label></div>
                        <?php 	if($userOptionV==1){ ?>
                      	<div class="col-sm-2" style="margin-top:7px;"><span class="label label-success" style="font-size:15px;">Yes</span></div>
                        <?php  }if($userOptionV==0){ ?>
                        <div class="col-sm-2" style="margin-top:7px;"><span class="label label-danger" style="font-size:15px;">No</span></div>	
                        <?php } ?> 	
                        <div class="col-sm-3"><a onclick="changeBackdate(<?php echo $_GET['uid'];?>,<?php echo $userOptionV;?>)" class="btn btn-primary"><i class="glyphicon glyphicon-transfer"></i></a></div>
                    </div>
                   <?php } ?>  
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                    <div class="row" style="margin-top:35px;">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"><?php echo $ui->input_button_warning(array('name'=>'createUser','value'=>'Update','type'=>'submit')); ?></div>
                        <div class="col-lg-3"></div>
                   	</div>     

             </div>       
            </div>
       	</div> 		
        </div>
		</div>  
	</div>  
</div>
</form>

<script>

//======================================================================
function changeBackdate(id,option){
	$.post("<?php echo AJAX_PATH;?>do_changeUserOption.php",{user : id, useroption : option},
		function(policy_number){
			location.reload(); 			
			}
		)				
	}	



</script>
