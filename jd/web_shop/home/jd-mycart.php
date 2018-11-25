
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>我的购物车 - 京东商城</title>


<link href='./css/jd-mycart.css' type="text/css"  rel="stylesheet">        

<style type="text/css">.fixed-bottom{position:fixed;bottom:0px;z-index:999}</style><style type="text/css">.jdm-toolbar .jdm-toolbar-footer .jdm-tbar-tab-survey .tab-ico {display: none;_display:none;}.jdm-toolbar .jdm-toolbar-footer .jdm-tbar-tab-survey .tab-text {left: 0px;width: 35px;height:30px;padding:2px 0 3px;line-height: 15px;background: #c81623;_display:block;</style></head>
<body>
<div id="shortcut-2014">
	<div class="w">
    	<ul class="fl">
    		<li class="dorpdown" id="ttbar-mycity">
			<div class="dt cw-icon ui-areamini-text-wrap" style="">
            <i class="ci-right"><s>◇</s></i>
            送至：<span class="ui-areamini-text" data-id="1" title="北京">武汉</span>
 			</div>
		    </li>
    	</ul>
    	<ul class="fr">
			<li class="fore1" id="ttbar-login"><a href="http://home.jd.com/" target="_blank" class="link-user"><?php @session_start(); if(empty($_SESSION['username'])) {echo "<a href='./jd-login.php'>你好,请登录</a>";}else{echo $_SESSION['username'];}?></a>&nbsp;&nbsp;<a href="./logout.php" class="link-logout">退出</a></li>
			<li class="spacer"></li>
			<li class="fore2">
				<div class="dt">
					<a target="_blank" href="./order.php">我的订单</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore3 dorpdown" id="ttbar-myjd" data-load="1">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>
					<a target="_blank" href="http://home.jd.com/">我的京东</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore4">
				<div class="dt">
					<a target="_blank" href="http://vip.jd.com/">京东会员</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore5">
				<div class="dt">
					<a target="_blank" href="http://b.jd.com/">企业采购</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore6 dorpdown" id="ttbar-apps" aid="2_955_6342">
				<div class="dt cw-icon">
					<i class="ci-left"></i>
					<i class="ci-right"><s>◇</s></i>
					<a target="_blank" href="http://app.jd.com/">手机京东</a>
				</div>
						<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="dd-inner" id="ttbar-apps-main"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div>				</div>			</div>		</li>
			<li class="spacer"></li>
			<li class="fore7 dorpdown" id="ttbar-atte" aid="2_955_6494">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>关注京东
				</div>	
						<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="dd-inner" id="ttbar-atte-main"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div>				</div>			</div>		</li>
			<li class="spacer"></li>
			<li class="fore8 dorpdown" id="ttbar-serv" data-load="1">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>客户服务
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore9 dorpdown" id="ttbar-navs" data-load="1">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>网站导航
				</div>
			</li>
    	</ul>
		<span class="clr"></span>
    </div>
</div>
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
<div class="w w1 header clearfix">
	<div id="logo">
		<a href="./jd-index.php" class="link1"><img src="./images/logo-201305.png" alt="京东商城"></a>
		<a href="http://cart.jd.com/cart.action#none" class="link2"><b></b>购物车</a>

	</div>
	

	<div class="cart-search">
		<div class="form">
			<input id="key" type="text" class="itxt" autocomplete="off" accesskey="s" style="color: rgb(153, 153, 153);">
			<input type="button" class="button" value="搜索" clstag="clickcart|keycount|xincart|cart_search" onclick="javascript:void(0);">
		</div>
	</div>
</div>


<!-- main -->
<div id="container" class="cart">
			<div class="w">
			<div id="chunjie" class="mb10"></div>
<div class="cart-filter-bar">
	<ul class="switch-cart">
		<li class="switch-cart-item">
			<a href="http://cart.jd.com/cart.action#none">
				<em>全部商品</em>
				<span class="number">1</span>
			</a>
		</li>
		            <li class="switch-cart-item ui-switchable-selected curr">
                <a class="" href="http://cart.yiyaojd.com/cart">
                    <em>京东大药房</em>
                </a>
            </li>
			</ul>
	<div class="cart-store">
		<input id="hiddenLocationId" type="hidden">
		<input id="hiddenLocation" type="hidden">
		
		
	</div>
	<div class="clr"></div>
	<div class="w-line">
		<div class="floater" style="width: 81px; left: 109.703px;"></div>
	</div>
	<div class="tab-con" style="display: none;"></div>
	<div class="tab-con hide ui-switchable-panel-selected" style="display: block;"></div>
</div>		</div>
		<div class="cart-warp">
			<div class="w">	
				<div id="jd-cart">
	<div class="cart-main cart-main-new">
		<div class="cart-thead">
			<div class="column t-checkbox">
				<div class="cart-checkbox">
					<input type="checkbox" checked="checked" id="toggle-checkboxes_up" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_allCheck">
					<label class="checked" for="">勾选全部商品</label>
				</div>
				全选
			</div>
			<div class="column t-goods">商品</div>
			<div class="column t-props"></div>
			<div class="column t-price">单价(元)</div>
			<div class="column t-quantity">数量</div>
			<div class="column t-sum">小计(元)</div>
			<div class="column t-action">操作</div>
		</div>
		<div id="cart-list">
		<div class="cart-item-list" id="cart-item-list-01">
		<div class="cart-tbody" id="vender_8888">
		<div class="shop">
		<div class="cart-checkbox">
			<label for="">勾选店铺内全部商品</label>
		</div>
		<?php
		//如果购物车不空，执行下面代码，空则不执行
			if(empty($_SESSION['gouwucar'])){
				die("<center><font size='7' color='gray'>穷逼，赶紧去吧购物车填满！</font></center>");
			}
		?>
		<span class="shop-txt">
												<a class="shop-name self-shop-name" href="javascript:;" id="venderId_8888" clstag="clickcart|keycount|xincart|cart_shopNameJD">京东自营</a>
									</span>
		 			 <div class="shop-extra-r" id="shop-extra-r_8888" checkedskuids="1832199" totalprice="449.00" venderfreight="6.00" freeshippingprice="99.00" venderid="8888" freightpattern="1" venderfreighttype="1">购满￥99.00 已免运费 <span class="tips-icon omu-tips" data-tips="部分超重超大商品运费单独收取，不在本功能范围内，准确运费以结算页为准"></span></div>
		 	</div>
		<?php
			$zongji = null;
			$count = null;
			foreach($_SESSION['gouwucar'] as $keys => $values){
				$zongji += $values['price']*$values['shuliang'];
				$count += $values['shuliang']
		?>
	<div class="item-list">
				<!--单品-->
			<!-- 单品-->
			<div class="item-single  item-item item-selected  " id="product_1832199">
		<div class="item-form">
			<div class="cell p-checkbox">
				<div class="cart-checkbox">
					<!--单品-->
						<input p-type="1832199_1" type="checkbox" name="checkItem" value="1832199_1" checked="checked" data-bind="cbid" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_checkOn_sku">
										<label for="" class="checked">勾选商品</label>
					<span class="line-circle"></span>
				</div>
			</div>
			<div class="cell p-goods">
				<div class="goods-item">
					<div class="p-img">
						<a href="http://item.jd.com/1832199.html" target="_blank" class="J_zyyhq_1832199"><img alt="东芝(TOSHIBA) Q300系列 240G SATA3 固态硬盘" clstag="clickcart|keycount|xincart|cart_sku_pic" width="80" src="../admin/goods/upload/<?php echo $values['goodspic']?>"></a>
					</div>
					<div class="item-msg">
						<div class="p-name">
							<a clstag="clickcart|keycount|xincart|cart_sku_name" href="http://item.jd.com/1832199.html" target="_blank"><?php echo $values['goodsname']?></a>
						</div>
						<div class="p-extend">
							<span class="promise" _giftcard="giftcard_1832199"><i class="jd-giftcard-icon"></i><a data-tips="选择礼品卡包装，将单独下单结算" clstag="clickcart|keycount|xincart|cart_lipin" class="ftx-03 gift-packing" href="javascript:void(0);">购买礼品包装</a></span>
																					<span class="promise" _yanbao="yanbao_1832199_"><i class="jd-service-icon"></i><a data-tips="购买增值保障" class="ftx-03 jd-service" href="http://cart.jd.com/cart.action#none">购买增值保障</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="cell p-props p-props-new">
									<div class="props-txt" title="★Q300系列★高性价比主推款"><?php echo $values['miaoshu']?></div>
													<div class="props-txt" title="【240G-256G】">尺码：【240G-256G】</div>
							</div>
			<div class="cell p-price">
									<strong><?php echo $values['price']?></strong>
			</div>
			<div class="cell p-quantity">
				<!--单品-->
					<div class="quantity-form">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_down" class="decrement" id="decrement_8888_1832199_1_1">-</a>
						<input autocomplete="off" type="text" class="itxt" value="<?php echo $values['shuliang']?>" id="changeQuantity_8888_1832199_1_1_0">
						<a href="javascript:void(0);" clstag="clickcart|keycount|xincart|cart_num_up" class="increment" id="increment_8888_1832199_1_1_0">+</a>
					</div>
								<div class="ac ftx-03 quantity-txt" _stock="stock_1832199">有货</div>
			</div>
			<div class="cell p-sum">
									<strong><?php echo ($values['price']*$values['shuliang'])?></strong>
											</div>
			<div class="cell p-ops">
				<!--单品-->
					<a id="remove_8888_1832199_1" clstag="clickcart|keycount|xincart|cart_sku_del" data-name="东芝(TOSHIBA) Q300系列 240G SATA3 固态硬..." data-more="removed_449.00_1" class="cart-remove" href="./delete.php?id=<?php echo $values['id']?>">删除</a>
											<a href="javascript:void(0);" class="cart-follow" id="follow_8888_1832199_1" clstag="clickcart|keycount|xincart|cart_sku_guanzhu">移到我的关注</a>
																	</div>
		</div>
			
		<div class="item-extra">
									<!-- 落地配服务 -->
															<div class="unmarket-items" _unmarket="unmarket_1832199" data="670;677;11303;1832199;1474381918487"></div>
					</div>
		<div class="item-line"></div>
	</div>
				</div>
				<?php }?>
</div>
			</div>
					</div>
	</div>
</div>
<div id="cart-floatbar">
	<div class="ui-ceilinglamp-1" style="width: 990px; height: 52px;"><div class="cart-toolbar fixed-bottom" style="width: 1366px; height: 50px;">
		<div class="toolbar-wrap">
			<div class="selected-item-list hide" style="display: none;">
			</div>
			<div class="options-box">
				<div class="select-all">
					<div class="cart-checkbox">
						<input type="checkbox" checked="checked" id="toggle-checkboxes_down" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart|keycount|xincart|cart_allCheckDown">
						<label class="checked" for="">勾选全部商品</label>
					</div>
					全选
				</div>
				<div class="operation">
					<a href="http://cart.jd.com/cart.action#none" clstag="clickcart|keycount|xincart|cart_somesku_del" class="remove-batch">删除选中的商品</a>
											<a href="http://cart.jd.com/cart.action#none" class="follow-batch" clstag="clickcart|keycount|xincart|cart_somesku_guanzhu">移到我的关注</a>
																<a class="J_clr_nosale" href="http://cart.jd.com/cart.action#none" clstag="pageclick|keycount|201508251|23">清除下柜商品</a>
									</div>
				<div class="clr"></div>
				<div class="toolbar-right">
					<div class="normal">
						<div class="comm-right">
							<div class="btn-area">
								<a href="./panduan.php"  clstag="clickcart|keycount|xincart|cart_gotoOrder" class="submit-btn" data-bind="1">
								去结算<b></b></a>
								<!-- <a href="javascript:void(0);" class="submit-btn submit-btn-disabled">
								去结算<b></b></a> -->
							</div>
							<div class="price-sum">
								<div>
									<span class="txt txt-new">总价：</span>
									<span class="price sumPrice"><em>￥<?php echo $zongji?></em></span>
									<b class="ml5 price-tips"></b>
									<div class="price-tipsbox" style="left: 77.0313px; display: none;">
										<div class="ui-tips-main">不含运费及送装服务费</div>
										<span class="price-tipsbox-arrow"></span>
									</div>
									<br>
									<span class="txt">已节省：</span>
									<span class="price totalRePrice">-￥0.00</span>
								</div>
							</div>
							<div class="amount-sum">
								已选择<em><?php echo $count?></em>件商品<b class="up" clstag="clickcart|keycount|xincart|cart_thumbnailOpen"></b>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="combine" style="display: none;">
						<div class="comm-right">
							<div class="btn-area">
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrderOut" class="jdInt-submit-btn">
								去全球购结算<b></b></a>
								<a href="javascript:void(0);" onclick="return false;" clstag="clickcart|keycount|xincart|cart_gotoOrder" class="common-submit-btn">
								去京东结算<b></b></a>
							</div>
							
						</div>
						<div class="clr"></div>
					</div>
				</div>
				
			</div>
		</div>
	</div></div>
</div>
<div class="cart-removed">
	<div class="r-tit">已删除商品，您可以重新购买或加关注：</div>
</div>			</div>
		</div>
			
		<div class="w">
	</div>
	
</div>







</body>
</html>