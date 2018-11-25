<head>
	<meta charset="utf-8">
</head>
<?php
	//删除用户文件
	//连接数据库，把数据写入数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	//在执行之前判断此类有没有子类  需要去数据库中查
	$sqlone = "select * from type where pid = {$_GET['id']}";
	$resone = mysqli_query($link,$sqlone);
	$res = mysqli_fetch_assoc($resone);
	if($res == null){
		//证明没有子类，可以删除
			
		//准备删除用户数据的sql语句
		$sqltwo = "delete from type where id = {$_GET['id']}";
		//把sql语句插入到数据库中
		$result = mysqli_query($link,$sqltwo);
		//判断是否成功，成功是真
		if($result){
			header("location:./design.php");
		}else{
			echo "删除失败";
		}
	}else{
			echo "删除失败，还有子类";
	}
	
?>