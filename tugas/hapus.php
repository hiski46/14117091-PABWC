<?php 
	include 'koneksi.php';
	$nama= $_POST['nama'];
	$query = "DELETE FROM mahasiswa where nama = '$nama'";
	$sql=mysqli_query($conn, $query) or die(mysqli_error($conn));

	if ($sql) {
		echo "Data Berhasil Dihapus <br>";
		echo "<a href='mahasiswa.html'>kembali</a>";
	}
 ?>