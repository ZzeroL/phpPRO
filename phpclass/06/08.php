<?php
	//字符串拆分为数组
	$str='AA@BB@CC@DD';
	
	$result = explode('@',$str);
	
	var_dump($result);
	
	echo"<hr>";
	
	//把数组组合成字符串
	
	$arr = [10,20,30,40];
	
	$result = implode($arr,'#');
	
	var_dump($result);
	
	echo"<hr>";
	
	//去掉左右多余的字符
	
	$str = ' ABC ';
	echo"#".$str."#";
	$result = trim($str,' ');
	echo"#".$result."#";
?>