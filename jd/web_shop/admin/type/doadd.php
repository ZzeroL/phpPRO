<?php
	var_dump($_POST);
	
	//��ӷ����ļ�
	//�������ݿ⣬������д�����ݿ�
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	//׼������sql���
	$sql = "insert into type(name,pid,path) values ('{$_POST['name']}','{$_POST['pid']}','{$_POST['path']}')";
	
	$res = mysqli_query($link,$sql);
	if($res){
		header("location:./design.php");
	}else{
		echo "���ʧ��";
	}
?>