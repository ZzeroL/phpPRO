<?php
	for($a=1 ; $a <=9;$a++){
		echo"$a<br>";
	}
	echo"<hr>";
	for($i=1 ; $i <=9;$i++){
		echo"123456789<br>";
	}
	for($k=1 ; $k <=9;$k++){
		for($i=1 ; $i <= $k;$i++){
			echo $i. "x" .$k ."=" .($i*$k) ." ";
		}
		echo"<br>";
	}
?>