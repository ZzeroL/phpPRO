<?php session_start();?>
<div id='top'>
			<div id='top_content'>
				<div id='top_cl'>送至: 北京</div>
				<div id='top_cr'>
					<ul>
					   <li><?php if(empty($_SESSION['username'])) {echo "<a href='./jd-login.php'>你好,请登录</a>";}else{echo "你好,".$_SESSION['username']."<li><a href='logout.php'>退出</a></li>";}?></a></li>
					   <li><a href="./panduanorder.php">我的订单</a></li>
					   <li><a href="">我的京东</a></li>
					   <li>京东会员</li>
					   <li>企业采购</li>
					   <li>手机京东</li>
					   <li>关注京东</li>
					   <li>客户服务</li>
					   <li>网站导航</li>
					</ul>
				</div>
				<div style='clear:both;'></div>
			</div>
		</div>
		<div id='header'>
			<a  href="./jd-index.php"><img  id='logo' src="./images/logo.png" alt=""></a>
			<form action="">
				<input  id='h_in' type="text" placeholder=' 商品名称'>
				<input  id='h_btn' type="submit" value="搜索">
			</form>
			<div id='hot_word'>
				<span>中秋福利</span>
				<span>手机专场</span>
				<span>农用物资</span>
				<span>团购9.9</span>
				<span>每150减50</span>
				<span>哺乳文胸</span>
				<span>深口单鞋女</span>
				<span>1元专享</span>
			</div>
			<a  id='h_cart' href="./jd-mycart.php">
				<i></i>
				<span>我的购物车</span>
			</a>
		</div>
		<div id='nav'>
			<ul id='menu'>
				<li>全部商品分类
                    <ul id='dropdown'>
                    	<li class='m1'><a href=''>家用电器</a>
                             <div class='m2'>
                             	 <div class='sm_l'>
                             	 	 <div class='sml_1'>
                             	 	 	 <a href="">玩3C<i>&gt;</i></a>
                             	 	 	 <a href="">手机频道<i>&gt;</i></a>
                             	 	 	 <a href="">网上营业厅<i>&gt;</i></a>
                             	 	 	 <a href="">配件城<i>&gt;</i></a>
                             	 	 	 <a href="">影像Club<i>&gt;</i></a>
                             	 	 	 <a href="">以旧换新<i>&gt;</i></a>
                             	 	 </div>
                             	 	 <div class='sml_2'>
                             	 	 	<a href="">手机通迅</a>
                             	 	 	<a href="">京东通信</a>
                             	 	 	<a href="">运营商</a>
                             	 	 	<a href="">手机配件</a>
                             	 	 	<a href="">手机配件</a>
                             	 	 	<a href="">摄影摄像</a>
                             	 	 	<a href="">数码配件</a>
                             	 	 </div>
                             	 </div>
                             	 <div class='sm_r'>
                             	 	<img src="./images/mp_1.png" alt="">
                             	 	<img src="./images/mp_2.jpg" alt="">
                             	 	<img src="./images/mp_3.jpg" alt="">
                             	 </div>
                             </div>
                    	</li>
                    	<li class='m1'><a href=''>手机、数码、京东通信</a></li>
                    	<li class='m1'><a href=''>电脑、办公</a></li>
                    	<li class='m1'><a href=''>家居、家具、家装、厨具</a></li>
                    	<li class='m1'><a href=''>男装、女装、童装、内衣</a></li>
                    	<li class='m1'><a href=''>个护化妆、清洁用品、宠物</a></li>
                    	<li class='m1'><a href=''>鞋靴、箱包、珠宝、奢侈品</a></li>
                    	<li class='m1'><a href=''>运动户外、钟表</a></li>
                    	<li class='m1'><a href=''>汽车、汽车用品</a></li>
                    	<li class='m1'><a href=''>母婴、玩具乐器</a></li>
                    	<li class='m1'><a href=''>食品、酒类、生鲜、特产</a></li>
                    	<li class='m1'><a href=''>医药保健</a></li>
                    	<li class='m1'><a href=''>图书、音像、电子书</a></li>
                    	<li class='m1'><a href=''>彩票、旅行、充值、票务</a></li>
                    	<li class='m1'><a href=''>理财、众筹、白条、保险</a></li>
                    </ul>
				</li>
			</ul>
			<ul id='menu_right'>
			<?php
				$link = mysqli_connect("localhost","root","123456");
				mysqli_select_db($link,"web_shop");
				mysqli_set_charset($link,"utf8");
				$sql = "select * from type where pid=0";
				$result = mysqli_query($link,$sql);
				//把集合解析成数组
				while($res = mysqli_fetch_assoc($result)){
					echo "<li><a href='./jd-glist.php?id={$res['id']}'>{$res['name']}</a></li>";
				}
			?>
			</ul>
		</div>