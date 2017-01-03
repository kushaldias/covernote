<?php 

	//--------------------------- Request From Type 01 || Individual -> Motor ----------------
	if($_REQUEST['type1']){		
		$coverNoteNo	=   $fw->agent($_SESSION['USERID'])->createCoverNoteMotor($_REQUEST) ;
		if($coverNoteNo != 'FALSE'){
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Created !');
				$fw->agentEmail($_SESSION['USERID'])->send_email_today($coverNoteNo,$_REQUEST);
		} else {
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Not Created !!');
		}
	}
	//--------------------------- Request From Type 02 || Individual -> NonMotor -------------
	if($_REQUEST['type2']){		
		if($fw->agent($_SESSION['USERID'])->createCoverNoteNonMotor($_REQUEST)){
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Created !');
		} else {
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Not Created !!');
		}
	}
	//--------------------------- Request From Type 03 || Organization -> Motor ----------------
	if($_REQUEST['type3']){		
		if($fw->agent($_SESSION['USERID'])->createCoverNoteMotor($_REQUEST)){
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Created !');
		} else {
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Not Created !!');
		}
	}
	//--------------------------- Request From Type 02 || Organization -> NonMotor -------------
	if($_REQUEST['type4']){		
		if($fw->agent($_SESSION['USERID'])->createCoverNoteNonMotor($_REQUEST)){
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Created !');
		} else {
			echo $fw->agent($_SESSION['USERID'])->jQueryMessage('Certificate Not Created !!');
		}
	}

?>
<!-- End Header and Nav -->
<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home</a></li>
        </ul>
    </div>
</div>    
      
      
<div class="row">
	<h3 class="subheader offset-by-five">All CoverNotes</h3>
</div>
      

      
<div class="row">  
<div class="twelve columns">
	<div class="row">        
	<?php  include_once ('agent_menu.php');?>
<!---------- End Nav and Banner ------------------------->      
      
    <form method="post" name="add" action="admin_main.html"> 
 	
  
  <div class="ten columns" style="margin-top:-20px;"> 
  			  <!-------------------------------------------------------------------------------------->
              <hr />
              <!--------------------------------------------------------------------------------------> 
              <span class="label label-warning" style="font-size:16px;">Motor</span>
        	<table class="table table-bordered" style="margin-top:3px;">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="110">Line of Business</th>
                        <th width="110">Product Type</th>
                        <th width="60">Premium</th>
                        <th width="50">Start Date</th>
                        <th width="80">Expiray Date</th>
                        <th width="150">Issue Date</th>
                        <th width="150">Quotation  Number</th>
                        <th width="70">Print</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->agent($_SESSION['USERID'])->getAllCovernotesByIdmotor($_SESSION['USERID']) as $v){?>
        			<tr>
                    	<td><?php echo $v['id'];?></td>
                        <td><?php echo $v['lineOfBusiness'];?></td>  
                        <td><?php echo $v['motorProductType'];?></td>                       
                        <td><?php echo number_format($v['premiumAmount'],2);?></td> 
                        <td><?php echo $v['coverInceptionDate'];?></td>
                        <td><?php echo $v['coverExpiryDate'];?></td>
                        <td><?php echo $v['dateCreated'];?></td>
                        <td><?php echo $v['quotationNumber'];?></td>
                        <td><a class="btn btn-xs btn-primary review" href="<?php echo AJAX_PATH?>do_printMotor.php?id=<?php echo $v['id'];?>" onclick="printstatus(<?php echo $v['id'];?>)"> <i class="glyphicon glyphicon-print"></i> Print </a></td>
                <?php }?>	
				</tbody>
			</table>
             <!-------------------------------------------------------------------------------------->
             <!--  <hr /> -->
              <!--------------------------------------------------------------------------------------> 
              <!-- <span class="label label-warning" style="font-size:16px;">Non Motor</span>
        	<table class="table table-bordered" style="margin-top:3px;">
                <thead>
                    <tr>
                    	<th width="20">ID</th>
                        <th width="110">Line of Business</th>
                        <th width="110">Product Type</th>
                        <th width="60">Premium</th>
                        <th width="50">Start Date</th>
                        <th width="80">Expiray Date</th>
                        <th width="150">Issue Date</th>
                        <th width="70">Print</th>
                    </tr>
                </thead>
                <tbody> -->
        		<!-- <?php foreach($fw->agent($_SESSION['USERID'])->getAllCovernotesByIdNonmotor($_SESSION['USERID']) as $v){?>
        			<tr>
                    	<td><?php echo $v['id'];?></td>
                        <td><?php echo $v['lineOfBusiness'];?></td>  
                        <td><?php echo $v['nonmotorProductType'];?></td>                       
                        <td><?php echo number_format($v['netPremium'],2);?></td> 
                        <td><?php echo $v['policyStartDate'];?></td>
                        <td><?php echo $v['policyExpirationDate'];?></td>
                        <td><?php echo $v['dateCreated'];?></td>
                        <td><a class="btn btn-xs btn-primary review" href="<?php echo AJAX_PATH?>do_printNonMotor.php?id=<?php echo $v['id'];?>"> <i class="glyphicon glyphicon-print"></i> Print </a></td>         
                        
			   <?php }?>	
				</tbody>
			</table> -->
           	  <!-------------------------------------------------------------------------------------->
              <!-- <hr /> -->
              <!--------------------------------------------------------------------------------------> 
        </div>
	</div>  
</div>    
	</div>
</form>
<?php echo $ajax->fancyBoxByClass('review')?>



<script>

function printstatus(id)
    {
    
    setTimeout( function() { printstatus_delay(id); }, 5000 );
    				
	}
    
function printstatus_delay(id)
    {
    console.log(id);
	$.post("<?php echo AJAX_PATH;?>do_changeUserStatus.php",{id : id}
	
		)
    }
    
    
function printstatusNonmotor(id)
    {
    
    setTimeout( function() { printstatusNonmotor_delay(id); }, 5000 );
    				
	}
    
function printstatusNonmotor_delay(id)
    {
    console.log(id);
	$.post("<?php echo AJAX_PATH;?>do_changeUserStatus.php",{id_non : id}
	
		)
    }
    
</script>




