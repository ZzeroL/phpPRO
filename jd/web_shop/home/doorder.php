<?php
	session_start();
	//�Ѷ�������Ϣ���뵽�������У��Ѷ���������뵽�����������
	//�Ȳ��붩����Ȼ�����򶩵�������в���
	
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	
	//����sql���
	$uid = $_SESSION['login']['uid'];
	//�ջ���
	$linkman = $_SESSION['shouhuoxinxi']['shouhuoren'];
	//�ջ���ַ
	$address = $_SESSION['shouhuoxinxi']['shouhuodizhi'];
	//�ջ��绰
	$phone = $_SESSION['shouhuoxinxi']['lianxidianhua'];
	//���ʱ��
	$addtime = time();
	//�ܽ��
	$total = $_SESSION['zongji'];
	//״̬
	$status = 1;
	//����sql���
	$sql = "insert into orders (uid,linkman,address,phone,addtime,total,status) values ('{$uid}','{$linkman}','{$address}','{$phone}','{$addtime}','{$total}','{$status}')";
	//����sql���
	$res = mysqli_query($link,$sql);
	//����������Ի�ȡ��һ�β���ִ�гɹ���id��
	$orderid = mysqli_insert_id($link);
	if($res){
		foreach($_SESSION['gouwucar'] as $key=>$value){
			//��������ɹ����򶩵��������ѭ��������Ķ���
			$goodsid = $_SESSION['gouwucar'][$key]['id'];
			$name = $_SESSION['gouwucar'][$key]['goodsname'];
			$price = $_SESSION['gouwucar'][$key]['price'];
			$num = $_SESSION['gouwucar'][$key]['shuliang'];
			//�򶩵�������в���sql���
			$sqltwo = "insert into detail (orderid,goodsid,name,price,num) values('{$orderid}','{$goodsid}','{$name}','{$price}','{$num}')";
			$res = mysqli_query($link,$sqltwo);
			if($res){
				header("location:./jd-order.php");
				
			}else{
				echo "��������ʧ�ܣ�";
			}
		}
		//��չ��ﳵ
		unset($_SESSION['gouwucar']);
	}else{
		echo "����ʧ��";
	}
?>