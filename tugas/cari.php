<?php 
	include 'koneksi.php';

	$nama=$_POST['nama'];

	$query = "SELECT * FROM mahasiswa Where nama='$nama'";

	$sql = mysqli_query($conn, $query) or die(myqli_error($conn));
	$data = mysqli_fetch_array($sql);

	$nrp = $data['nrp'];
	$prodi = $data['id_jur'];
	$n = $data['nama'];
	$query1="SELECT nama from jurusan where id_jur=$prodi";
	$sql1= mysqli_query($conn, $query1) or die(mysqli_error($conn));
	$data1= mysqli_fetch_array($sql1);
	$prodi1 = $data1['nama'];



	if (!$sql||!$sql1) {
		echo "Data tidak ditemukan";
		echo "<a href='mahasiswa.html'>kembali</a>";
	}else{
		echo "<h3>Data Ditemukan</h3><br>";
		echo "Nama    :".$n."<br>";
		echo "NRP     :".$nrp."<br>";
		echo "Prodi   :".$prodi1."<br>";
		echo "<a href='mahasiswa.html'>kembali</a>";
	}
	 
 ?>