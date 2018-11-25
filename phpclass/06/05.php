<?php
	function runnian($num){
		if($num%4==0 && $num%100!=0){
			echo"闰年";
		}else if($num%400==0){
			echo"闰年";
		}else{
			echo"不是闰年";
		}
	}
	echo runnian($num = $_GET['runnian']);
?>