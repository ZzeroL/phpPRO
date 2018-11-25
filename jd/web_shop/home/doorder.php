<?php
	session_start();
	//把订单的信息插入到订单表中，把订单详情加入到订单详情表中
	//先插入订单表，然后在向订单详情表中插入
	
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	
	//插入sql语句
	$uid = $_SESSION['login']['uid'];
	//收货人
	$linkman = $_SESSION['shouhuoxinxi']['shouhuoren'];
	//收货地址
	$address = $_SESSION['shouhuoxinxi']['shouhuodizhi'];
	//收货电话
	$phone = $_SESSION['shouhuoxinxi']['lianxidianhua'];
	//添加时间
	$addtime = time();
	//总金额
	$total = $_SESSION['zongji'];
	//状态
	$status = 1;
	//插入sql语句
	$sql = "insert into orders (uid,linkman,address,phone,addtime,total,status) values ('{$uid}','{$linkman}','{$address}','{$phone}','{$addtime}','{$total}','{$status}')";
	//发送sql语句
	$res = mysqli_query($link,$sql);
	//这个函数可以获取上一次插入执行成功的id号
	$orderid = mysqli_insert_id($link);
	if($res){
		foreach($_SESSION['gouwucar'] as $key=>$value){
			//订单插入成功，向订单详情表中循环插入买的东西
			$goodsid = $_SESSION['gouwucar'][$key]['id'];
			$name = $_SESSION['gouwucar'][$key]['goodsname'];
			$price = $_SESSION['gouwucar'][$key]['price'];
			$num = $_SESSION['gouwucar'][$key]['shuliang'];
			//向订单详情表中插入sql语句
			$sqltwo = "insert into detail (orderid,goodsid,name,price,num) values('{$orderid}','{$goodsid}','{$name}','{$price}','{$num}')";
			$res = mysqli_query($link,$sqltwo);
			if($res){
				header("location:./jd-order.php");
				
			}else{
				echo "订单详情失败！";
			}
		}
		//清空购物车
		unset($_SESSION['gouwucar']);
	}else{
		echo "订单失败";
	}
?>