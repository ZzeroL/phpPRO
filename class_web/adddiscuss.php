<head>
	<meta charset="utf-8">
</head>
<?php
	//执行添加评论文件
	//链接数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"class_web");
	mysqli_set_charset($link,"utf8");
	$actid = $_POST['hid'];
	$discuss = $_POST['discuss'];
	$sql2 = "insert into discuss(actid,username,discuss) values('{$actid}','何自力','{$discuss}')";
	$result = mysqli_query($link,$sql2);
	if($result){
		header("location:./blog.php");
	}else{
		echo"失败";
	}
	
	