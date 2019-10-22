<!DOCTYPE html>
<html>
<head>
	<title>latihan-3</title>
</head>
<body>
<?php 
	function fak($nilai)
	{
		if ($nilai==0||$nilai==1){
			return 1;
		}else{
			return $nilai * fak($nilai-1);
		}
	}
 ?>

 <form method="GET">
 	<label>Masukkan nilai :</label>
 	<input type="text" name="nilai"><br>
 	<input type="submit" name="fak" value="Faktorkan">
 </form><br><br>

 <?php 
 	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 	if (isset($_GET)){
 		echo "Hasil Pemfaktoran =".fak($_GET["nilai"]);
 	}
  ?>
</body>
</html>