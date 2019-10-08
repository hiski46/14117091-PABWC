<?php 
	$n = 37;
	for ($i = 1 ; $i<=37; $i++){
		$a = 0;
		for ($j = 1;$j<10;$j++){
			$mood = $i%$j;
			if($mood==0){
				$a++;
			}
		}
			if($a<=2){
				echo "$i <br>";
			}
	}
 ?>