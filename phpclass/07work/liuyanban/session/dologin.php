<?php
	session_start();
	//执行登录
	if($_POST['pass']==123){
		//密码真确把用户名写入session
		$_SESSION['username']= $_POST['username'];
		header("location:../liuyan.php");
	}
	else{
		echo"密码错误";
	}
?>