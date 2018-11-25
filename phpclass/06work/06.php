<?php
	//拆分字符串函数
	$str= 'aa#bb#cc';
	
	$result = explode('#',$str);
	
	var_dump ($result);
	
	
	echo "<hr>";
	
	//组合成字符串函数
	
	$arr = [1,2,3,4,5,6];
	
	$result = implode('@',$arr);
	
	var_dump ($result);
	
	//去掉两边多余的字符  ltrim左边 rtrim右边
	
	$str = ' abc ';
	echo "#".$str."#";
	$result = ltrim($str,' ');
	echo "#".$result."#";