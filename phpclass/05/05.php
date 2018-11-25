<?php

	$grade = $_GET['chengji'];
	
	if($grade>=60){
		if($grade>=85){
			echo"你为何如此优秀！";
		}else{
			echo"继续努力";
		}
	}else{
		if($grade>=30){
			echo"下次补考";
		}else{
			echo"来办公室喝茶！";
		}
	}
?>