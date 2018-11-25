<?php	
	session_start();
	//这个文件执行登录
	if($_POST['pass'] == 123) {
		//如果密码正确
		//那么把用户名写入SESSION
		$_SESSION['username'] = $_POST['username'];
		header("location:01.php");
	}else{
		echo "密码错误";
	}
	