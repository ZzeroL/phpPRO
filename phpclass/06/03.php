<?php
	function add($num1,$num2){
		return $num1+$num2;
	}
	
	function shuchu(){
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
	}
	echo add(30,50);
	echo add(10,50);
	echo"<br>";
	echo shuchu();
?>