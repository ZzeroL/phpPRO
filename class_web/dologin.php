<?php
	session_start();
	//ִ�е�¼
	if($_POST['pass']==123456){
		//������ȷ���û���д��session
		$_SESSION['username']= $_POST['username'];
		header("location:./index.php");
	}
	else{
		echo"�������";
	}
?>