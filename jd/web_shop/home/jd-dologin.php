<?php
		session_start();
		if(empty($_POST['username'])){
			header("location:./login.php?e=1");
			exit;
		}
		if(empty($_POST['password'])){
			header("location:./login.php?e=2");
			exit;
		}
		//1 �������ݿ�
			$link = mysqli_connect("localhost","root","123456");
		//2 ѡ�����ݿ�
			mysqli_select_db($link,"web_shop");
		//3 ���ñ���Ϊutf-8
			mysqli_set_charset($link,"utf8");
		//�ж��˺�	
		//4 ��ѯ������˺��Ƿ����
		//����sql���
			$sql = "select username from users where username='{$_POST['username']}'";
			$result = mysqli_query($link,$sql);
		//����һ�����������󣬿�����������û���˺ţ��о���һ������û�о��ǿ�
			$res = mysqli_fetch_assoc($result);
		//7 �ж������null ����û���˺ţ��������null���������˺�
			if($res!=null){
				//���˺���ȥ�鿴���룬���û���˺ţ��͸����˺Ų�����
				//�ж�����
				$sql2 = "select id,password from users where username='{$_POST['username']}' and password='{$_POST['password']}'";
				//��sql��䷢�͵����ݿ�
				$result = mysqli_query($link,$sql2);
				//����һ�����������󣬿�����������û�����룬�о���һ�����飬û�о���null
				$res = mysqli_fetch_assoc($result);
				
				if(!($res == null)){
					//������ȷ�����û�������session��
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['login']['uid'] = $res['id'];
					//��תҳ�浽��ҳ
					header("location:./jd-index.php");
				}else{
					//�������
					echo "�������";
				}
			}else{
				die("�˺Ų����ڣ�����ϵ�ٷ���");
			}
?>