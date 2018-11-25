<?php
	$i =9;
	do{
		$k=1;
		do{
			echo $k. "x" .$i ."=" .($i*$k) ." ";
            $k++;
			
		}while($k<=$i);
		$i--;
		echo"<br>";
	}while($i>=1);
	
?>