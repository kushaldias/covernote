<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home</a></li>
            <li><a href="#">Creat CoverNote</a></li>
            <li style="float:right; color:#000;"><a href="#">Welcome <b><?php echo $fw->agent($_SESSION['USERID'])->get_username_by_id($_SESSION['USERID']); ?></b></a></li>
        </ul>        
    </div>
</div>    
      
      
<div class="row">
	<h3 class="subheader offset-by-five">Create CoverNote</h3>
</div>



<div class="row">  
<div class="twelve columns">

	<?php  include_once ('agent_menu.php');?>

	<form method="post" name="add" onsubmit="return Qcheck()" action="all_certificates.html"> 
	<?php 	
	//======================== Type 01 INDIVIDUAL || MOTOR ====================
	if($_GET['type'] == 1){
		include_once ('individual.php');
		include_once ('motor.php');		
	?>	    
	<div class="row">
		<div class="twelve columns"> 
			<div class="two columns"> </div>
        	<div class="ten columns"> 
				<div class="panel panel-default" style="background-color:#FFF">
          			<div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2"><?php echo $ui->input_button_warning(array('name'=>'type1','value'=>'Create CoverNote','type'=>'submit')); ?></div>
              		<div class="col-lg-3"></div>
          		</div>
          	</div>
        	</div> 
        </div>  
    </div>  	
   <?php   
    //===========================================================================     
		}
	//======================== Type 02 INDIVIDUAL || NON-MOTOR ==================	
	if($_GET['type'] == 2){
		include_once ('individual.php');
		include_once ('nonmotor.php');
	?>	    
	<div class="row">
		<div class="twelve columns"> 
			<div class="two columns"> </div>
        	<div class="ten columns"> 
				<div class="panel panel-default" style="background-color:#FFF">
          			<div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2"><?php echo $ui->input_button_warning(array('name'=>'type2','value'=>'Create CoverNote','type'=>'submit')); ?></div>
              		<div class="col-lg-3"></div>
          		</div>
          	</div>
        	</div> 
        </div>  
    </div>  	
   <?php 	
	//=========================================================================== 	
		}	
	//======================== Type 03 ORGANIZATION || MOTOR ====================	
	if($_GET['type'] == 3){
		include_once ('organization.php');
		include_once ('motor.php');
		?>	    
        <div class="row">
            <div class="twelve columns"> 
                <div class="two columns"> </div>
                <div class="ten columns"> 
                    <div class="panel panel-default" style="background-color:#FFF">
                        <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2"><?php echo $ui->input_button_warning(array('name'=>'type3','value'=>'Create CoverNote','type'=>'submit')); ?></div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
                </div> 
            </div>  
        </div>  	
       <?php 
	//=========================================================================== 	
		}
	//======================== Type 04 ORGANIZATION || NON-MOTOR ================	
	if($_GET['type'] == 4){
		include_once ('organization.php');
		include_once ('nonmotor.php');
		?>	    
        <div class="row">
            <div class="twelve columns"> 
                <div class="two columns"> </div>
                <div class="ten columns"> 
                    <div class="panel panel-default" style="background-color:#FFF">
                        <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2"><?php echo $ui->input_button_warning(array('name'=>'type4','value'=>'Create CoverNote','type'=>'submit')); ?></div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
                </div> 
            </div>  
        </div>  	
       <?php 
	//=========================================================================== 	
		}		
	
	?>	
    
    </form>

</div>
</div>
