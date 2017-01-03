	<div class="menu">
		<ul>
			<li class="active"><a href="/manage/home.html"><i class="icon-home"></i> Home</a></li>
			<?php if($_SESSION['SUSERTYPE'] == 'ADMIN'){?>
					<li class="active"><a href="users.html"><i class="icon-list"></i> Users</a></li>
			<?php }?>
			<li class="active"><a href="/manage/home.html?node=logout"><i class="icon-off"></i> Logout</a></li>
		</ul>
	</div>