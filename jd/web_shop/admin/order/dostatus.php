<?php
	//�������ݿ�
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	//�����ݿ���д�����ݿ����
	$sql = "update orders set status={$_POST['status']} where id = {$_POST['id']}";
	$res = mysqli_query($link,$sql);
	if($res){
		header("location:./design.php");
	}else{
		echo "�޸�ʧ�ܣ�";
	}
?>