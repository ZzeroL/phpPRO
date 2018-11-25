<?php
	//拆分字符串函数
	$str= 'abc#abc#abc';
	
	$result = explode('#',$str);
	
	var_dump ($result);
	
	
	echo "<hr>";
	
	//组合成字符串函数
	
	$arr = [a,b,c,d,e,f,g];
	
	$result = implode('@',$arr);
	
	var_dump ($result);
	
	//去掉两边多余的字符  ltrim左边 rtrim右边
	
	$str = ' 123 ';
	echo "#".$str."#";
	$result = ltrim($str,' ');
	echo "#".$result."#";