<?php

	//定义数组 数组不能用echo输出
	$a=[a,b,c,d,e,f];
	var_dump ($a);
	
	echo "<hr>";
	//指定元素的位置
	$b=[a,b,c,d,6=>e];
	var_dump($b);
	
	echo "<hr>";
	//取元素
	$c=[a,b,c,d,e,f];
	echo $c[5];
	
	echo "<hr>";
	//遍历数组
	$d = [a,b,c,d,e,f,g,h,j];
	//遍历函数
	foreach($d as $key=>$value){
		echo $value;
	}
	
	echo "<hr>";
	
	
?>