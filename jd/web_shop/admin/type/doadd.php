<?php
	var_dump($_POST);
	
	//添加分类文件
	//连接数据库，把数据写入数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	//准备插入sql语句
	$sql = "insert into type(name,pid,path) values ('{$_POST['name']}','{$_POST['pid']}','{$_POST['path']}')";
	
	$res = mysqli_query($link,$sql);
	if($res){
		header("location:./design.php");
	}else{
		echo "添加失败";
	}
?>