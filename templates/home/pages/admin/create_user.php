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
            <li><a href="#">Create User</a></li>
        </ul>
    </div>
</div>    
      
      
<div class="row">
	<h2 class="subheader offset-by-four">Create New User</h2>
</div>
      

      
<div class="row">  
	<div class="twelve columns">
		<div class="row">        
		<?php  include_once ('left_menu.php');?>
<!---------- End Nav and Banner ------------------------->      
      
    <form method="post" name="createUser" action="createUser.html"> 
 	
  		<div class="ten columns"> 
        	<div class="panel panel-default" style="background-color:#FFF">
            	
   					<div class="row">                    	
                      <div class="col-sm-6"><h5><i class="glyphicon glyphicon-hand-right" style="padding-right:10px;"></i>User Details</h5></div>            
                  	</div> 
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">Agent / Admin Name :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="name" id="name" type="text" required />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">User Name :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="userName" id="userName" type="text" required />	
                     	</div>
                        <div class="col-sm-3"><label style="margin-top:10px;">Password :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="passWord" id="passWord" type="password" required />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">email :</label></div>
                      	<div class="col-sm-5">
                      		<input style="font-weight:700;" name="email" id="email" type="text" placeholder="someone@gmail.com" required />	
                     	</div>
                    </div>
                    
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                    
                    
                    <div class="row">
                    	<div class="col-sm-3"><label style="margin-top:10px;">User Type :</label></div>
                      	<div class="col-sm-3">
                      		<select id="userType" name="userType" class="form-control" onchange="setOptions()">
                            	<?php foreach($fw->admin($_SESSION['USERID'])->get_userType() as $v){?>
                              	<option value="<?php echo $v['iduserRoles'];?>"><?php echo $v['userRole'];?></option>     
                              	<?php }?>                       
                            </select>
                     	</div>
                        <div id="codedivbranch" class="hide">
                        <div class="col-sm-3"><label id="codeLable" style="margin-top:10px;">Branch Code :</label></div>
                      	<div class="col-sm-3">
                      		<input style="font-weight:700;" name="code" id="code" type="text" />	
                     	</div>
                        </div>
                        <div id="codediv" class="hide">
                        <div class="col-sm-3"><label id="codeLable" style="margin-top:10px;">Branch Code :</label></div>
                      	<div class="col-sm-3">
                      		<select id="codeAgent" name="codeAgent" class="form-control" onchange="setOptions()">
                            	<?php foreach($fw->admin($_SESSION['USERID'])->get_all_branches_by_id(3) as $v){?>
                              	<option value="<?php echo $v['idusers'];?>"><?php echo $v['code'];?></option>     
                              	<?php }?>                       
                            </select>	
                     	</div>
                    </div>
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                  	<div class="hide" id="optionrow_b">                    	
                      <div class="col-sm-6"><h5><i class="glyphicon glyphicon-hand-right" style="padding-right:10px;"></i>Agent Options</h5></div>            
                  	</div> 
                    
                    
                    <div class="hide" id="optionrow">
                    	<div class="col-sm-3"><label style="margin-top:10px;">Date BackDate :</label></div>
                      	<div class="col-sm-3">
                      		<input type="checkbox" name="backDate" id="backDate" value="1"  />  
                        </div>		
                     	</div>
                    
                    
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-3"><?php echo $ui->input_button_warning(array('name'=>'createUser','value'=>'Create User','type'=>'submit')); ?></div>
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
function setOptions(){		
	var e = document.getElementById("userType");
	coverPeriod = parseInt(e.options[e.selectedIndex].value);	
	
	if(coverPeriod == 1){
		$("#optionrow").attr("class", "hide");
		$("#optionrow_b").attr("class", "hide");
		$("#codediv").attr("class", "hide");
		$("#codedivbranch").attr("class", "hide");
		}	
	if(coverPeriod == 2){
		$("#optionrow").attr("class", "row");
		$("#optionrow_b").attr("class", "row");
		$("#codediv").attr("class", "row");
		$("#codedivbranch").attr("class", "hide");
		}
	if(coverPeriod == 3){
		$("#codedivbranch").attr("class", "row");
		$("#codediv").attr("class", "hide");
		$("#optionrow").attr("class", "hide");
		$("#optionrow_b").attr("class", "hide");
		}	


	}
	
//======================================================================	
$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});		

</script>
