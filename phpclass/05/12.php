﻿<?php
	for($i=1;$i<=5;$i++){
		for($j=1;$j<=5-$i;$j++){
			echo ("&thinsp;");
		}
		for($k=1;$k<=$i;$k++){
			echo"*";
		}
		echo"<br>";
	}
	for($i=4;$i>=1;$i--){
		for($j=1;$j<=5-$i;$j++){
			echo ("&thinsp;");
		}
		for($k=1;$k<=$i;$k++){
			echo"*";
		}
		
		echo"<br>";
	}
	
 ?>
