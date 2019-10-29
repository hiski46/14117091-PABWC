<!DOCTYPE html>
<html>
<head>
	<title>latihan-2</title>
</head>
<body>
	<?php 
		function nama($nama, $warna)
		{
			$x=strlen($nama);
			if($warna==null){
				$warna="red";
			}
			if($x>0&& $x<=10){
				$harga=$x*300;
				echo '<font color="'.$warna. '">' .$nama. ' -> Harga Total = Rp.' .$harga. '</font>';
			}else if($x>10&& $x<=20){
				$harga=$x*500;
				echo '<font color="'.$warna. '">' .$nama. ' -> Harga Total = Rp.' .$harga. '</font>';
			}else{
				$harga=$x*700;
				echo '<font color="'.$warna. '">' .$nama. ' -> Harga Total = Rp.' .$harga. '</font>';
			}
		}
	 ?>
	 <form method="GET">
	 	<label> Nama :</label>
	 	<input type="text" name="nama"> <br>
	 	<label>Pilih Warna</label>
	 	<select name="warna" >
	 		<option value=""></option>
	 		<option value="blue">Biru</option>
	 		<option value="green">Hijau</option>
	 		<option value="yellow">Kuning</option>
	 		<option value="orange">Orange</option>
	 		<option value="cyan">Cyan</option>
	 	</select> <br>
	 	<input type="submit" name="ok" value="Cek">
	 </form>
	 <br><br><br>
	 <font color="red"></font>
	 <?php 
	 error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	 	if (isset($_GET)) {
	 		nama($_GET["nama"],$_GET["warna"]);
	 	}

	  ?>
</body>
</html>