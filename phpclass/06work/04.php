<?php

	//定义数组 数组不能用echo输出
	$a=[1,2,3,4,5,6];
	var_dump ($a);
	
	echo "<hr>";
	//指定元素的位置
	$b=[1,2,3,5,6=>10];
	var_dump($b);
	
	echo "<hr>";
	//取元素
	$c=[1,2,3,4,5,6,7];
	echo $c[3];
	
	echo "<hr>";
	//遍历数组
	$d = [20,30,40,50,60,60,60,60,60,60,60];
	//遍历函数
	foreach($d as $key=>$value){
		echo $value;
	}
	
	echo "<hr>";
	
	
?>