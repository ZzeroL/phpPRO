<head>
	<meta charset="utf-8">
</head>
<?php
	session_start();
	//�ж���֤��
	if(strtolower($_POST['code'])!= strtolower($_SESSION['code'])){
		die("��֤�����");
	}
	//�ж�������ظ�����
	if($_POST['password']!=$_POST['repass']){
		die("�����������벻ͬ�����������룡");
	}
	if($_POST['username']!=null){
			if($_POST['password']!=null){
				if($_POST['name']!=null){
					if($_POST['phone']!=null){
						if($_POST['email']!=null){
							//����û��ļ�
							//�������ݿ⣬������д�����ݿ�
							$link = mysqli_connect("localhost","root","123456");
							mysqli_select_db($link,"web_shop");
							mysqli_set_charset($link,"utf8");
							//׼������sql���
							$sql = "insert into users(quanxian,username,password,name,phone,email)
							values ('2','{$_POST['username']}','{$_POST['password']}','{$_POST['name']}','{$_POST['phone']}','{$_POST['email']}')";
							//��sql�����뵽���ݿ���
							$result = mysqli_query($link,$sql);
							//�ж��Ƿ�ɹ����ɹ�����
							if($result){
								header("location:./jd-login.php");
							}else{
								echo "ע��ʧ��";
							}
						}else{echo "���䲻��Ϊ��";}
					}else{echo "�绰����Ϊ��";}
				}else{echo "��������Ϊ��";}
			}else{echo "���벻��Ϊ��";}
		}else{echo "�˺Ų���Ϊ��";}