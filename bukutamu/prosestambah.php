<!DOCTYPE html>
<html>
<head>
	<title>Simpan Buku Tamu</title>
</head>
<body>
	<h1>Simpan Buku Tamu untuk database MySQL</h1>
	<?php 
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$komentar = $_POST["komentar"];

		$conn = mysqli_connect("localhost", "root", "", "tamu") or die("koneksi gagal");

		echo "nama     : ".$nama."<br>";
		echo "email     : ".$email."<br>";
		echo "komentar     : ".$komentar."<br>";

		$sqlstr="INSERT INTO bukutamu (nama,email,komentar) values ('$nama', '$email', '$komentar')";
		$hasil = mysql_query($conn, $sqlstr);
		echo "Simpan Buku Tamu berhasil dilakukan";

	 ?>
</body>
</html>