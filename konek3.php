<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Data Base MYSQL</title>
</head>
<body>
<h1>Koneksi database dengan mysql_fetch_assoc</h1>
<?php 
	$conn=mysqli_connect("localhost", "root", "","champion") or die("koneksi gagal");

	$hasil = mysqli_query($conn, "SELECT * FROM liga");
	while ($row=mysqli_fetch_row($hasil)){
		echo " Liga ".$row["1"];
		echo " mempunyai ".$row["2"];
		echo " Wakil di liga champion <br>";
	}
 ?>

</body>
</html>