<?php include_once ('header/header.php');?>
<body onLoad="setupMap()" onUnload="GUnload()">
<div id="sys_message" class="sys_message"></div>
<h2 class="header_text"></h2>
<?php if($node=='logout'){ $fw->manage_users()->logOut(); }?>
<?php if($_REQUEST['btnlogin']){?>
	<?php if($fw->manage_users()->login($_REQUEST)){
			echo $fw->manage_users()->jQueryMessage('Login Success !.', TRUE);
		  } else {
		  	echo $fw->manage_users()->jQueryMessage('Please Check your username or password.', FALSE);
		  }
	 ?>
<?php }?>

<div id="wrapper">
	<?php include_once ('menu/main_menu.php');?>
	<div class="content">
		<?php if($fw->manage_users()->isLogin() == FALSE){?>
			<?php include_once ('pages/login.php');?>
		<?php } else {?>
		<?php switch($page){
			default : 		include_once ('pages/dashboard.php');					break;
			case 'users':	include_once ('pages/users.php');						break;
			case 'holiday':	include_once ('pages/holiday.php');						break;
			case 'meta':	include_once ('pages/meta-management.php');				break;
			case 'time_adgestment': include_once ('pages/salary_adgestment.php');	break;
			case 'genaratepayslips': include_once ('pages/payments.php');			break;
			
		}?>
		<?php }?>
	</div>
	<div style="clear:both;"></div>
</div>
<?php include_once ('footer/footer.php');?>
</body>
</html>
<?php exit();?>
