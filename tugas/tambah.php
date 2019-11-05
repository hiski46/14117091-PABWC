<?php 
	include 'koneksi.php';
	$nrp=$_POST['nrp'];
	$nama=$_POST['nama'];
	$prodi=$_POST['jurusan'];
	// $kode = mysqli_query()
	$query = mysqli_query($conn, "INSERT INTO mahasiswa  VALUES ('$nrp','$nama','001')") or die("koneksi gagal");
	if ($query) {
		echo "Berhasil";
	}else{
		echo "gagal";
	}	
 ?>