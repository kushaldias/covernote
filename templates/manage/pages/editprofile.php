<p>
<a class="link" href="/editprofile.form?node=myaccount">My Account</a>
<a class="link" href="/editprofile.form?node=mytenders">Flagged Tenders</a>
<a class="link" href="/editprofile.form?node=customersupport">Customer Support</a>
<?php if($users->isAdmin()){?>
	<a class="link adminlink" href="/editprofile.form?node=usermanage">User Management</a>
	<a class="link adminlink" href="/editprofile.form?node=tendermanage">Tenders Management</a>
<?php }?>
</p>
<?php 
switch($node){
	case 'myaccount':		include_once('node/manageaccount.php');				break;	
	case 'mytenders':		include_once('node/mytenders.php');					break;
	case 'customersupport': include_once('node/customer_support.php');			break;
	case 'usermanage': 		include_once('node/usermanager.php');				break;
	case 'tendermanage':	include_once('node/tendermanage.php');				break;
	default 		: 		include_once('node/mytenders.php');					break;
}?>