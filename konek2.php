<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Dengan data base mysql</title>
</head>
<body>
<h1>koneksi database dengan mysql_fetch_array</h1>
<?php 
	$conn=mysqli_connect("localhost", "root", "","champion") or die("koneksi gagal");
	// mysqli_select_db("champion",$conn);
	$hasil = mysqli_query($conn, "SELECT * from liga");
	while ($row=mysqli_fetch_array($hasil)){
		echo " Liga ".$row["negara"];
		echo " mempunyai ".$row["2"];
		echo " Wakil di liga champion <br>";
	}
 ?>
</body>
</html>