<!-- End Header and Nav -->
<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home - Branch </a></li>
            <li><a href="#">ALL Certificates</a></li>
            <li style="float:right; color:#000;"><a href="#">Welcome <b><?php echo $fw->agent($_SESSION['USERID'])->get_username_by_id($_SESSION['USERID']); ?></b></a></li>
        </ul>
    </div>
</div>    
      
      
<div class="row">
	<h3 class="subheader offset-by-five">All CoverNotes</h3>
</div>
      

      
<div class="row">  
<div class="twelve columns">
	<div class="row">        
	<?php  include_once ('branch_menu.php');?>
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
                    	<th width="130">Agent</th>
<!--                        <th width="110">Line of Business</th>-->
                        <th width="110">Product Type</th>
                        <th width="60">Premium</th>
                        <th width="50">Start Date</th>
                        <th width="80">Expiray Date</th>
                        <th width="150">Issue Date</th>
                        <th width="70">Print</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->agent($_SESSION['USERID'])->getAllCovernotesByBranchMotor($_SESSION['USERID']) as $v){?>
        			<tr>
                    	<td><?php echo $fw->agent($_SESSION['USERID'])->getAgentNamebyUserid($v['users_idusers']);?></td>
<!--                        <td><?php echo $v['lineOfBusiness'];?></td>  -->
                        <td><?php echo $v['motorProductType'];?></td>                       
                        <td><?php echo number_format($v['premiumAmount'],2);?></td> 
                        <td><?php echo $v['coverInceptionDate'];?></td>
                        <td><?php echo $v['coverExpiryDate'];?></td>
                        <td><?php echo $v['dateCreated'];?></td>
                        <td><a class="btn btn-xs btn-primary review" href="<?php echo AJAX_PATH?>do_printMotor.php?id=<?php echo $v['id'];?>" onclick="printstatus(<?php echo $v['id'];?>)"> <i class="glyphicon glyphicon-print"></i> Print </a></td>
                <?php }?>	
				</tbody>
			</table>
             <!-------------------------------------------------------------------------------------->
              <hr />
              <!--------------------------------------------------------------------------------------> 
              <span class="label label-warning" style="font-size:16px;">Non Motor</span>
        	<table class="table table-bordered" style="margin-top:3px;">
                <thead>
                    <tr>
                    	<th width="130">Agent</th>
<!--                        <th width="110">Line of Business</th>-->
                        <th width="110">Product Type</th>
                        <th width="60">Premium</th>
                        <th width="50">Start Date</th>
                        <th width="80">Expiray Date</th>
                        <th width="150">Issue Date</th>
                        <th width="70">Print</th>
                    </tr>
                </thead>
                <tbody>
        		<?php foreach($fw->agent($_SESSION['USERID'])->getAllCovernotesByBranchNonmotor($_SESSION['USERID']) as $v){?>
        			<tr>
                    	<td><?php echo $fw->agent($_SESSION['USERID'])->getAgentNamebyUserid($v['users_idusers']);?></td>
<!--                        <td><?php echo $v['lineOfBusiness'];?></td>  -->
                        <td><?php echo $v['nonmotorProductType'];?></td>                       
                        <td><?php echo number_format($v['netPremium'],2);?></td> 
                        <td><?php echo $v['policyStartDate'];?></td>
                        <td><?php echo $v['policyExpirationDate'];?></td>
                        <td><?php echo $v['dateCreated'];?></td>
                        <td><a class="btn btn-xs btn-primary review" href="<?php echo AJAX_PATH?>do_printNonMotor.php?id=<?php echo $v['id'];?>" onclick="printstatusNonmotor(<?php echo $v['id'];?>)"> <i class="glyphicon glyphicon-print"></i> Print </a></td>         
                        
			   <?php }?>	
				</tbody>
			</table>
           	  <!-------------------------------------------------------------------------------------->
              <hr />
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

