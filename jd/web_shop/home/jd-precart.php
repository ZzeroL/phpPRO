<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
        <link href="./css/top.css" rel="stylesheet" type="text/css" />
        <link href="./css/head.css" rel="stylesheet" type="text/css" />
         <link href="./css/menu.css" rel="stylesheet" type="text/css" />
         <link href="./css/mainbody.css" rel="stylesheet" type="text/css" />
         <link href="./css/foot.css" rel="stylesheet" type="text/css" />
         <link href="./css/tuiguang.css"  rel="stylesheet" type="text/css" />
         <link href="./css/goodslist.css"  rel="stylesheet" type="text/css" />
         <link href="./css/detail.css"  rel="stylesheet" type="text/css" />
         <link href="./css/tocart.css"  rel="stylesheet" type="text/css" />
         <link href="./css/hidemenu.css"  rel="stylesheet" type="text/css" />
		
	</head>
	<body>
		<?php  include("./head.php")?>
		<div id='line'></div>
<div id='precart-p'>
    <div id='precart-c'>
        <div id='pre-l'>
		<?php 
		if (!session_id()){
		session_start();}
		$link = mysqli_connect("localhost","root","123456");
		mysqli_select_db($link,"web_shop");
		mysqli_set_charset($link,"utf8");
		$sql = "select * from goods where id={$_POST['id']}";
		$result = mysqli_query($link,$sql);
		//把集合解析成数组
		$res = mysqli_fetch_assoc($result);
		//像购物车中添加商品
		if(empty($_SESSION['gouwucar'][$res['id']])){
			$_SESSION['gouwucar'][$res['id']]['goodsname'] = $res['goodsname'];
			$_SESSION['gouwucar'][$res['id']]['goodspic'] = $res['goodspic'];
			$_SESSION['gouwucar'][$res['id']]['price'] = $res['price'];
			$_SESSION['gouwucar'][$res['id']]['miaoshu'] = $res['miaoshu'];
			$_SESSION['gouwucar'][$res['id']]['shuliang'] = $_POST['cnt'];
			$_SESSION['gouwucar'][$res['id']]['id'] = $res['id'];
		}else{
			$_SESSION['gouwucar'][$res['id']]['shuliang'] += $_POST['cnt'];
			$_SESSION['gouwucar'][$res['id']]['id'] = $res['id'];
		}
		
		?>
            <p>商品已成功加入购物车！</p>
            <img src='../admin/goods/upload/<?php echo $res['goodspic']?>'><div>
                <span><?php echo $res['goodsname']?></span>
                <span><?php echo $res['miaoshu']?>/ 数量：<?php echo $_POST['cnt']?></span>
            </div>
        </div>
        <div id='pre-r'>
            <a href=''>返回</a>
            <a href='./jd-mycart.php'>去购物车结算</a>
        </div>
    </div>
</div>
<div style='clear:both;'></div>



<!--  页脚  -->
	
	</body>
</html>