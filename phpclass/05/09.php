<?php
	$i = 9;
	
	while($i >=1){
		$k = 1;
		while($k <=$i){
			
			echo $i. "x" .$k ."=" .($i*$k) ." ";
            $k++;			
		}
		
		$i--;
		echo"<br>";
	}
?>