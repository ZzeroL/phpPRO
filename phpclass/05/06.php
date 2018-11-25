<?php

	$grade = $_GET['chengji'];
	
	if($grade>=60){
		if($grade>=80){
			if($grade>=90){
				echo"优秀";
			}
			else{
				echo"良好";
			}
		}else{
			if($grade>=70){
				echo"一般";
			}
			else{
				echo"及格";
			}	
		}
	}else{
		if($grade>=30){
			if($grade>=45){
				echo"不及格";
			}
			else{
				echo"差";
			}
		}else{
			echo"非常差";
		}
	}
?>