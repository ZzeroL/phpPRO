<?php
	function runnian($num){
		if($num%4==0 && $num%100!=0){
			echo"����";
		}else if($num%400==0){
			echo"����";
		}else{
			echo"��������";
		}
	}
	echo runnian($num = $_GET['runnian']);
?>