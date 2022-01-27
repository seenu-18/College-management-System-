<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		

		<img src="img/home.png" style="margin-left:90px;" class="sha">
			
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > College Slogan</h3><br>
					<img src="img/1.png" height=140px>
					<p class="para">

					<b>" To be a centre of excellence in education and research".</b> 
					</p>
					<b>producing global leaders in science, technology and management.</b>	
					<p class="para">
						
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>