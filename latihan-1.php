<!DOCTYPE html>
<html>
<head>
	<title>latihan-1</title>
</head>
<body>
<?php 
	// $a=10;
	// $b=50;
	// echo "Nilai Sebelum Diubah :<br> A= " .$a. " <br> B= " .$b. "<br>";
	function tukar(&$x, &$y)
	{
		$c=$x;
		$x=$y;
		$y=$c;
	}
	// tukar ($a, $b);
	// echo "Nilai Setelah Diubah :<br> A= " .$a. " <br> B= " .$b;
 ?>

 <form method="GET">
 	<label>Nilai Pertama :</label>
 	<input type="text" name="pertama"><br>
 	<label>Nilai Kedua :</label>
 	<input type="text" name="kedua"><br>
 	<input type="submit" name="" value="Tukar">
 </form>

 <?php 
 	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 	$a=$_GET["pertama"];
 	$b=$_GET["kedua"];
 	echo "Nilai Sebelum Diubah :<br> A= " .$a. " <br> B= " .$b. "<br>";
 	tukar($a,$b);
 	echo "Nilai Setelah Diubah :<br> A= " .$a. " <br> B= " .$b;
  ?>
</body>
</html>