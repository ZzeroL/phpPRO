<head>
	<meta charset="utf-8">
</head>
<?php
	include("./upload.php");
	//修改商品信息文件
	//连接数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"web_shop");
	mysqli_set_charset($link,"utf8");
	if($_FILES['goodspic']['error'] != 4){
		//先做图片上传
		$res = uploadfile($_FILES['goodspic']);
		$goodspic = $res['info'];
	}else{
		$goodspic = $_POST['oldgoodspic'];
	}
	//写sql语句
	$sql = "update goods set goodsname = '{$_POST['goodsname']}',goodspic = '{$goodspic}',goodstype = '{$_POST['goodstype']}',
	price = '{$_POST['price']}',stock = '{$_POST['stock']}',miaoshu = '{$_POST['miaoshu']}' where id='{$_POST['id']}'";
	$result = mysqli_query($link,$sql);
	if($result){
		header("location:./design.php");
	}else{
			echo "修改失败";
		}
?>