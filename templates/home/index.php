<?php include_once ('header/header.php');?>

<body onLoad="setupMap()" onUnload="GUnload()">
<div id="sys_message" class="sys_message"></div>
<h2 class="header_text"></h2>
<?php if($page=='logout'){ $fw->manage_users()->logOut(); }?>

<?php if($_REQUEST['btnlogin']){?>
	<?php if($fw->manage_users()->login($_REQUEST)){
			echo $fw->manage_users()->jQueryMessage('Login Success !.', TRUE);
		  } else {
		  	echo $fw->manage_users()->jQueryMessage('Please Check your username or password.', FALSE);
		  }
	 ?>
<?php }?>

<div class="menu">
	<?php  //include_once ('menu/main_menu.php');?>
</div>

<div id="wrapper">	
	<div class="content">
    
    	
    
		<?php if($fw->manage_users()->isLogin() == FALSE){?>
			<?php include_once ('pages/login.php');?>
		<?php } else {?>
		<?php
			switch($page){
				
				case 'individual_page': 		include_once ('pages/agent/individual.php');		break;
				case 'organization_page': 		include_once ('pages/agent/organization.php');		break;
				case 'motor_page': 			include_once ('pages/agent/motor.php');			break;
				case 'nonmotor_page': 			include_once ('pages/agent/nonmotor.php');		break;
                                case 'contacts':                        include_once ('pages/agent/contacts.php');             break;
				//========================================================================================
				case 'createCoverNote': 		include_once ('pages/agent/createCoverNote.php');	break;
				case 'all_certificates': 		include_once ('pages/agent/all_certificates.php');	break;
				//========================================================================================
				case 'admin_main': 			include_once ('pages/admin/admin_main.php');		break;
				case 'createUser': 			include_once ('pages/admin/create_user.php');		break;
				case 'editUser': 			include_once ('pages/admin/edit_user.php');		break;
                                case 'certificates': 			include_once ('pages/admin/certificates.php');		break;
                                //========================================================================================
                                case 'branch_main': 			include_once ('pages/branch/branch_main.php');		break;
				case 'editUserBranch': 			include_once ('pages/branch/edit_user.php');		break;
                                case 'all_certificatesBranch': 		include_once ('pages/branch/all_certificatesBranch.php');break;
                                case 'certificatesByBranch': 		include_once ('pages/branch/certificatesByBranch.php'); break;
                                
				
				default : 				include_once ('pages/route.php');			break;
			}?>
		<?php }?>
	</div>
	<div style="clear:both;"></div>
</div>

<?php include_once ('footer/footer.php');?>
</body>
</html>
<?php exit();?>