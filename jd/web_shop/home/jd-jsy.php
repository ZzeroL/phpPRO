<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>结算页</title>
    <link href="./css/foot.css" rel="stylesheet"  type="text/css" />
    <link href="./css/jiesuanye.css" rel="stylesheet"  type="text/css" />

</head>
<body>
	<div id='top'>
		<div id='top-m'>
			<span id='top-m-l'>送至：北京</span>
			<span id='top-m-r'>景水 退出 | 我的订单 | 我的京东 | 京东会员 | 企业采购 | 手机京东 | 关注京东 | 客户服务 | 网站导航</span>
		</div>
	</div>
	<img id='top-img' src="./images/top.png" alt="">
	<div id='order'>
		 <span id='o-title'>收货人信息</span>
		 <a href='' id='o-add'>新增收货地址</a>
		 <div style='clear:both;'></div>
		 <span id='o-addr'><?php echo $_SESSION['shouhuoxinxi']['shouhuoren']?><i></i><b>v</b></span>
		 <span id='o-addres'><?php echo $_SESSION['shouhuoxinxi']['shouhuodizhi']?></span>
		 <span id='o-tel'><?php echo $_SESSION['shouhuoxinxi']['lianxidianhua']?></span>
		 <div id='o-line'></div>
		 <span id='o-shqd'>送货清单</span>
		 <span id='o-jgsm'>价格说明   返回修改购物车</span>
		 <div id='o-content'>
		    
		     	<img src="./images/pstime.png" alt="">
		
		 	
		 	   <div id='opcon'>
					<?php
						$zongji = null;
						$count = null;
						foreach($_SESSION['gouwucar'] as $keys => $values){
						$zongji += $values['price']*$values['shuliang'];
						$count += $values['shuliang'];
					?>
				 	<div class='o-con-d'>
				 		<img class='o-pic' width="80" src="../admin/goods/upload/<?php echo $values['goodspic']?>" alt="">
				 		<div class='o-m'>
					 		<span class='o-name'>
					 		   希捷(SEAGATE)2TB 7200转64M SATA3 台式机硬盘(ST2000DM001)
					 		</span>
					 		<span class='o-tui'>7天无理由退货</span>
				 		</div>
				 		<span class='o-price'>￥<?php echo $values['price']?></span><span class='o-cnt'>x<?php echo $values['shuliang']?></span><span class='o-state'>有货</span>
				 	</div>
						<?php }
						//把总金额放到session中
						$_SESSION['zongji'] = $zongji;
						?>
			 	</div>

		 	</div>	
		 	<div style='clear:both;'></div>	 
		 </div>
		 <div id='o-za'>
		 	 <div id='o-zafei1'>
		 	 	<div class='o-zafei'>￥<?php echo $zongji?></div>
		 	 	<div class='o-zafei'>-￥0.00</div>
		 	 	<div class='o-zafei'>￥0.00</div>
		 	 	<div class='o-zafei'>￥0.00</div>
		 	 </div>
		 	 <div id='o-zafei2'>
		 	 	<div class='o-zafei'><?php echo $count?> 件商品，总商品金额：</div>
		 	 	<div class='o-zafei'>返现：</div>
		 	 	<div class='o-zafei'>运费：</div>
		 	 	<div class='o-zafei'>服务费：</div>
		 	 </div>
		 	 <div style='clear:both;'></div>
		 </div>
		 <div id='o-end'>
		 	<div id='o-end1'><span>应付总额：</span> <b>￥<?php echo $zongji?></b></div>
		 	<div id='o-end2'><span>寄送至：<?php echo $_SESSION['shouhuoxinxi']['shouhuodizhi']?> </span>&nbsp;&nbsp;<span>收货人: <?php echo $_SESSION['shouhuoxinxi']['shouhuoren'].",". $_SESSION['shouhuoxinxi']['lianxidianhua']?></span></div>
		 </div>
		 <div id='o-final'>
		 	<a id='o-submit' href="doorder.php">确认订单</a>
		 </div>
	    
</body>
</html>