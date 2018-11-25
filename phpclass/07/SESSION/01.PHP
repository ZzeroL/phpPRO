<?php	
	//会话控制//session
	session_start();
	if(empty($_SESSION['username'])) {
		echo "这个页面是牛逼的首页<a href='./login.php'>请，登录</a>";
	}else{
		echo "欢迎您".$_SESSION['username']."<a href='logout.php'>退出</a>";
	}