<?php 
	$conn = mysqli_connect("localhost", "root", "","tamu")or die("koneksi GAGAL");

	$hasil = mysqli_query($conn,"SELECT * FROM bukutamu");
	$jumlah = mysqli_num_rows($hasil);
	echo "<center>Daftar Pengunjung</center>";
	echo "Jumlah Pengunjung : $jumlah";
	$a = 1;

	while ($baris = mysqli_fetch_array($hasil)) {
		echo "<br>";
		echo "$a";
		echo "<br>";
		echo "Nama    :".$baris[0];
		echo "<br>";
		echo "Email    :".$baris[1];
		echo "<br>";
		echo "KOmentar    :".$baris[2];
		$a++;
	}
 ?>