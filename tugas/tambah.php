<?php 
	include 'koneksi.php';
	$nrp=$_POST['nrp'];
	$nama=$_POST['nama'];
	$prodi=$_POST['jurusan'];
	$kode = mysqli_query($conn, "SELECT id_jur FROM jurusan where nama='$prodi'") or die("Jurusan tidak dapat");
	$kode_jr = mysqli_fetch_array($kode);
	$jurusan=$kode_jr['id_jur'];
	$query = mysqli_query($conn, "INSERT INTO mahasiswa  VALUES ('$nrp','$nama','$jurusan')") or die("koneksi gagal");
	if ($query) {
		echo "Berhasil<br>";
		echo "<a href='mahasiswa.html'>kembali</a>";
	}else{
		echo "gagal";
	}	
 ?>