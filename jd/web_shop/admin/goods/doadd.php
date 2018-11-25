<?php
	//接受添加商品的信息
	//包含上传图片函数
	include("./upload.php");
	//1 连接数据库
		$link = mysqli_connect("localhost","root","123456");
	//2 选择数据库
		mysqli_select_db($link,"web_shop");
	//3 设置编码为utf-8
		mysqli_set_charset($link,"utf8");
			
			
	//图片上传
	$res = uploadfile($_FILES['goodspic']);
	//向数据库中写商品的信息
	if($res['ok?']){
		$sql = "insert into goods(goodsname,goodspic,goodstype,price,stock,miaoshu,xiaoliang) values 
		('{$_POST['goodsname']}','{$res['info']}','{$_POST['goodstype']}','{$_POST['price']}','{$_POST['stock']}','{$_POST['miaoshu']}','0')";
		$res = mysqli_query($link,$sql);
		if($res){
			header("location:./design.php");
			echo "商品添加成功！";
		}else{
			echo "商品添加失败！";
		}
	}else{
		echo "图片上传失败！";
	}
?>