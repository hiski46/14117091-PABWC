<?php 
	$kolom = $_POST['kolom'];
	$cari = $_POST['cari'];
	$conn = mysqli_connect("localhost", "root","", "tamu" ) or die("error");
	$hasil = mysqli_query($conn,"SELECT * FROM bukutamu WHERE $kolom like '%$cari%'");
	$jumlah=mysqli_num_rows($hasil);
	echo "<br>";
	echo "Ditemukan :".$jumlah;
	echo "<br>";

	while ($baris=mysqli_fetch_array($hasil)) {
		echo "Nama :".$baris[0]."<br>";
		echo "Email :".$baris[1]."<br>";
		echo "Komentar :".$baris[2]."<br>";

	}
 ?>