<head>
	<meta charset="utf-8">
</head>
<?php
	//删除购物车里的东西
	session_start();
	unset($_SESSION['gouwucar'][$_GET['id']]);
	
	header("location:./jd-mycart.php");
?>