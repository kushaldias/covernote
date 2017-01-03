
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="/emarine"><i class="icon-home"></i></a></li>
			<?php if($_SESSION['SUSERTYPE'] == 'admin'){?>
					<li class="active"><a href="/acc_ready_to_print.html"><i class="icon-list"></i> Accepted List</a></li>
			<?php }?>
			<?php if($_SESSION['SUSERTYPE'] == 'AUTH'){?>
					<li class="active"><a href="/auth_myworks.html"><i class="icon-list"></i> My Works</a></li>
			<?php }?>
			
			<?php if($_SESSION['SUSERTYPE'] == 'MANAGER'){?>
					<li class="active"><a href="/man_myworks.html"><i class="icon-list"></i> My Works</a></li>
			<?php }?>
			
			<?php if($_SESSION['SUSERTYPE'] == 'EXCOMANAGER'){?>
					<li class="active"><a href="/excom_myworks.html"><i class="icon-list"></i> My Works</a></li>
			<?php }?>				
			
		</ul>
    
    
    
		