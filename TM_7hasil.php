
<?php 
	$nama = $_POST['nama'];
	$jk = $_POST['jk']; 
	$gol = $_POST['gol']; 
	// $hob = array($_POST['hoby']);
	$ket = $_POST['ket'] ;


	echo "Nama : ".$nama."<br>";
	echo "Jenis Kelamin : ".$jk."<br>";
	echo "Golongan Darah : ".$gol."<br>";
	if(isset($_POST['ok'])){
		echo "hoby   :";
		foreach($_POST['hoby'] as $item){
            echo "<ul><li>".$item ."</li></ul>";
	}
	echo "Keterangan :".$ket;
}
 ?>
