<?php
//�����ջ���Ϣҳ��
	session_start();
	$_SESSION['shouhuoxinxi']['shouhuoren'] = $_POST['shouhuoren'];
	$_SESSION['shouhuoxinxi']['lianxidianhua'] = $_POST['lianxidianhua'];
	$_SESSION['shouhuoxinxi']['shouhuodizhi'] = $_POST['shouhuodizhi'];
	header("location:./jd-jsy.php");
?>