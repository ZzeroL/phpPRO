<?php
	session_start();
	//ִ�е�¼
	if($_POST['pass']==123){
		//������ȷ���û���д��session
		$_SESSION['username']= $_POST['username'];
		header("location:../liuyan.php");
	}
	else{
		echo"�������";
	}
?>