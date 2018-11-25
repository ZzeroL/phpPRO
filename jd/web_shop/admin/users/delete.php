<head>
	<meta charset="utf-8">
</head>
<?php
	//修改用户文件
	//连接数据库，把数据写入数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	//准备修改用户数据的sql语句
	$sql = "delete from users where id = '{$_GET['id']}'";
	var_dump($sql);
	//把sql语句插入到数据库中
	$result = mysqli_query($link,$sql);
	//判断是否成功，成功是真
	if($result){
		header("location:./design.php");
	}else{
		echo "删除失败";
	}
?>