<?php	//���ҳ�����˳�ҳ��
		//�˳���ԭ��ܼ򵥣��ڵ�¼ҳ�����ж�$_SESSION['username'] �ջ��ǲ��գ�����ǿգ���ô����û�е�¼�������˼·���Ǹ��������
		session_start();
		$_SESSION['username'] = null;
		unset($_SESSION['login']['uid']);
		header("location:./jd-index.php");