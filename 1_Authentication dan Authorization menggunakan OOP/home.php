<?php 
	session_start();
	if (!isset($_SESSION['user'])||(trim($_SESSION['user'])=='')) {
		header('location:index.php');
	}
	include_once('user.php');
	$user = new User();

	$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
	$row = $user -> details($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Login Authentication OOP PABW</title>
 </head>
 <body>
 	<div>
 		<h1>PHP Login Authentication OOP PABW</h1>
 		<div>
 			<div>
 				<h2>Selamat datang di Dashboard</h2>
 				<h4>User Info:  </h4><br>
 				Name: <?php echo $row['fname']; ?><br>
 				Username: <?php echo $row['username']; ?><br>
 				Password : <?php echo $row['password']; ?><br>
 				<a href="logout.php"><span></span> Logout</a>
 			</div>
 		</div>
 	</div>
 
 </body>
 </html>