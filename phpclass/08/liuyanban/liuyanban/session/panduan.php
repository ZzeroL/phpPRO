<?php	
	//�Ự����//session
	session_start();
	if(empty($_SESSION['username'])) {
		echo "<a href='./login.php'>�룬��¼</a>";
	}else{
		echo "��ӭ��".$_SESSION['username']."<a href='logout.php'>�˳�</a>";
	}