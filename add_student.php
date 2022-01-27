<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
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
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Student Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into staff(SID,SNAME,SCOURSE,SFEE) values('1,{$_POST["sname"]}','{$_POST["couse"]}','{$_POST["fee"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Name of the Student</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <label>Course</label><br>
					     <input type="text" name="qual" required class="input">
					     <br><br>
					     <label>Fee</label><br>
					     <input type="text" name="sal" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Student Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>