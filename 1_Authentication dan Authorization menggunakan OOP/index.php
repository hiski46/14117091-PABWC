<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		header('location:home.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Login Authentication OOP PABW</title>
 </head>
 <body>
 	<h1>PHP Login Authentication OOP PABW</h1>
 	<h3><span></span>Login</h3>
 	<form method="POST" action="login.php">
 		<div>
 			<input type="text" name="username" placeholder="Username">
 		</div>
 		<div>
 			<input type="password" name="password" placeholder="Password">
 		</div>
 		<button type="submit" name="login"><span></span>Login</button>
 	</form>
 	<?php 
 		if (isset($_SESSION['message'])) {
 	 ?>
 	 <div>
 	 	<?php echo $_SESSION['message']; ?>
 	 </div>
 	 <?php 
 	 	unset($_SESSION['message']);
 	 }
 	  ?>
 </body>
 </html>