<?php
	function panduan($num){
		if($num%2==0){
			echo"您输入的是偶数";
		}else{
			echo"您输入的数是奇数";
		}
	}
	echo panduan(10);
?>