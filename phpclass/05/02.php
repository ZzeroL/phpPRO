<?php
	//数据类型转换 //主要是其他他类型转换为布尔类型到底是真是假
	//$num = 5;//true
	//$num =-5;//true
	$num = 0;//false
	var_dump((bool)$num);
	//结论：正整数和负整数转换后都为ture 零转换为假
	
	echo "<hr>";

	//$str = "我是你爸爸"
	//$str = "Love Your";
	$str="";
	var_dump((bool)$str);
	//字符串中为0或者什么都不写是false
	
	echo "<hr>";

	$float = 0.0;
	var_dump((bool)$float);
	//只有0.0是假其他都为真
?>