<div class="navbar">

			<ul class="list">
				<b style="color:black;float:left;line-height:50px;margin-left:15px;font-family:Cooper Black;">
				IIT Kharagpur </b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="admin_home.php"><font color=black>Admin Home</font></a></li>
				<li><a href="change_pass.php"><font color=black>Settings</font></a></li>
				<li><a href="logout.php"><font color=black>Logout</font></a></li>
					';
				}
				
			?>
				
			</ul>
		</div>
		