<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo Koneksi database mysql</h1>
<?php  
	$conn=mysqli_connect("localhost", "root", "");
	if ($conn) {
		echo "OK";
	}else{
		echo "Server not connected";
	}
 ?>
</body>
</html>