<?php
	//数据类型
	//整形
	$num = 2;
	echo $num;
	//浮点
	$f=3.1415926;
	echo $f;
	//字符串
	$str="有毒";
	$str1='有毒';
	echo $str1;
	//布尔
	$bool = true;
	var_dump($bool);
	$bool2= false;
	var_dump($bool2);
	//对象
	class A{}
	$a = new A();
	var_dump($a);
	//null
	$nu = null;
	var_dump($nu);
	//资源
	$res = fopen("a.txt","r");
	var_dump($res);
	$arr = [1,2,3,4,5];
	var_dump($arr);
?>