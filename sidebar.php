<div class="sidebar"><br>
<h3 class="text">INFO</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">College Information</a></li>
			<li class="li"><a href="add_sub.php"> Courses</a></li>
                       
			<li class="li"><a href="add_staff.php"> Faculty</a></li>
                        <li class="li"><a href="view_staff.php">Faculty Details</a></li>
			</li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	
	}


?>
	

</ul>

</div>