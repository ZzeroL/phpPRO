<?php
	date_default_timezone_set("PRC");
	session_start();
	?>
<!DOCTYPE html>
<html  class="root61"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>我的京东--我的订单</title>
	
	<meta name="format-detection" content="telephone=no">
           

<link type="text/css" rel="stylesheet" href="./css/commonbak.css" source="widget">       
<link rel="stylesheet" href="./css/myjd.order2015bak.css">
<link rel="stylesheet" href="./css/alpha3bak.css">
<link charset="utf-8" rel="stylesheet" href="./css/tipsbak.css">


</head>  
<body myjd="_MYJD_ordercenter">

 <div id="shortcut-2014">
	<div class="w">
    	<ul class="fl">
    		<li class="dorpdown" id="ttbar-mycity">			<div class="dt cw-icon ui-areamini-text-wrap" style="">				<i class="ci-right"><s>◇</s></i>				送至：<span class="ui-areamini-text" data-id="1" title="北京">北京</span> 			</div>			<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="ui-areamini-content-wrap"> 					<div class="ui-areamini-content"><div class="ui-areamini-content-list"><div class="item"><a data-id="1" href="javascript:void(0)" class="selected">北京</a></div><div class="item"><a data-id="2" href="javascript:void(0)">上海</a></div><div class="item"><a data-id="3" href="javascript:void(0)">天津</a></div><div class="item"><a data-id="4" href="javascript:void(0)">重庆</a></div><div class="item"><a data-id="5" href="javascript:void(0)">河北</a></div><div class="item"><a data-id="6" href="javascript:void(0)">山西</a></div><div class="item"><a data-id="7" href="javascript:void(0)">河南</a></div><div class="item"><a data-id="8" href="javascript:void(0)">辽宁</a></div><div class="item"><a data-id="9" href="javascript:void(0)">吉林</a></div><div class="item"><a data-id="10" href="javascript:void(0)">黑龙江</a></div><div class="item"><a data-id="11" href="javascript:void(0)">内蒙古</a></div><div class="item"><a data-id="12" href="javascript:void(0)">江苏</a></div><div class="item"><a data-id="13" href="javascript:void(0)">山东</a></div><div class="item"><a data-id="14" href="javascript:void(0)">安徽</a></div><div class="item"><a data-id="15" href="javascript:void(0)">浙江</a></div><div class="item"><a data-id="16" href="javascript:void(0)">福建</a></div><div class="item"><a data-id="17" href="javascript:void(0)">湖北</a></div><div class="item"><a data-id="18" href="javascript:void(0)">湖南</a></div><div class="item"><a data-id="19" href="javascript:void(0)">广东</a></div><div class="item"><a data-id="20" href="javascript:void(0)">广西</a></div><div class="item"><a data-id="21" href="javascript:void(0)">江西</a></div><div class="item"><a data-id="22" href="javascript:void(0)">四川</a></div><div class="item"><a data-id="23" href="javascript:void(0)">海南</a></div><div class="item"><a data-id="24" href="javascript:void(0)">贵州</a></div><div class="item"><a data-id="25" href="javascript:void(0)">云南</a></div><div class="item"><a data-id="26" href="javascript:void(0)">西藏</a></div><div class="item"><a data-id="27" href="javascript:void(0)">陕西</a></div><div class="item"><a data-id="28" href="javascript:void(0)">甘肃</a></div><div class="item"><a data-id="29" href="javascript:void(0)">青海</a></div><div class="item"><a data-id="30" href="javascript:void(0)">宁夏</a></div><div class="item"><a data-id="31" href="javascript:void(0)">新疆</a></div><div class="item"><a data-id="52993" href="javascript:void(0)">港澳</a></div><div class="item"><a data-id="32" href="javascript:void(0)">台湾</a></div><div class="item"><a data-id="84" href="javascript:void(0)">钓鱼岛</a></div><div class="item"><a href="https://en.jd.com/" target="_blank" data-onchange="1">海外</a></div></div></div> 				</div> 			</div>		</li>
    	</ul>
    	<ul class="fr">
			<li class="fore1 dorpdown" id="ttbar-login"><div class="dt cw-icon">						<i class="icon-plus-nickname"></i>	                    <i class="ci-right"><s>◇</s></i>	                    <a class="nickname" target="_blank" href="./jd-login.php"><?php if(empty($_SESSION['username'])) {echo "<a href='./jd-login.php'>你好,请登录</a>";}else{echo "你好,".$_SESSION['username'];}?></a>		            </div>		            <div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="userinfo">					<div class="u-pic"><a target="_blank" href="https://home.jd.com/"><img src="./images/no-img_mid_.jpg" width="60" height="60"></a></div><div class="u-plus"><a href="./logout.php" class="link-logout">退出</a><a href="https://plus.jd.com/index" target="_blank" class="icon-plus-dropdown"></a></div>					<div class="u-msg"><a href="https://plus.jd.com/index" target="_blank">试用PLUS会员领免运费券&gt;</a></div>				</div>			<div class="badge-list">								<a href="javascript:void(0);" class="badge-list-prev">&lt;</a>								<div class="u-badges" style="position: relative;">									<div class="badge-panel-main" style="width: 700px; left: 0px; position: absolute;">										<div class="badge-panel fore1 ui-switchable-panel-selected u-dis" style="float: left; display: block;"><a href="https://plus.jd.com/index" target="_blank"><i></i><p class="u-name">免费试用</p></a></div><div class="badge-panel fore2" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-01" target="_blank"><i></i><p class="u-name">自营免运费</p></a></div>				<div class="badge-panel fore3" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-02" target="_blank"><i></i><p class="u-name">售后服务</p></a></div>				<div class="badge-panel fore4" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-03" target="_blank"><i></i><p class="u-name">评价奖励</p></a></div>				<div class="badge-panel fore5" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-04" target="_blank"><i></i><p class="u-name">会员特价</p></a></div>				<div class="badge-panel fore6" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-05" target="_blank"><i></i><p class="u-name">生日礼包</p></a></div>				<div class="badge-panel fore7" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-07" target="_blank"><i></i><p class="u-name">专享礼包</p></a></div>				<div class="badge-panel fore8" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-06" target="_blank"><i></i><p class="u-name">装机服务</p></a></div>				<div class="badge-panel fore9 u-dis" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-08" target="_blank"><i></i><p class="u-name">贵宾专线</p></a></div>				<div class="badge-panel fore10 u-dis" style="float: left; display: block;"><a href="https://vip.jd.com/help.html#mypri-09" target="_blank"><i></i><p class="u-name">运费券</p></a></div></div>								</div>								<a href="javascript:void(0);" class="badge-list-next">&gt;</a>							</div></div></li>
			<li class="spacer"></li>
			<li class="fore2">
				<div class="dt">
					<a target="_blank" href="#">我的订单</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore3 dorpdown" id="ttbar-myjd">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>
					<a target="_blank" href="https://home.jd.com/">我的京东</a>
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
			<li class="spacer"></li>
			<li class="fore4">
				<div class="dt">
					<a target="_blank" href="https://vip.jd.com/">京东会员</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore5">
				<div class="dt">
					<a target="_blank" href="https://b.jd.com/">企业采购</a>
				</div>
			</li>
			<li class="spacer"></li>
			<li class="fore6 dorpdown" id="ttbar-apps" aid="2_955_6342" data-load="1">
				<div class="dt cw-icon">
					<i class="ci-left"></i>
					<i class="ci-right"><s>◇</s></i>
					<a target="_blank" href="https://app.jd.com/">手机京东</a>
				</div>
						<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="dd-inner" id="ttbar-apps-main" style="background: url(&quot;//img13.360buyimg.com/da/jfs/t3106/1/2941001419/24724/1a2c1c16/57e8c84bN0188ccb1.jpg&quot;);"><a href="https://app.jd.com/" class="link link1" target="_blank">京东客户端</a><a href="https://m.jr.jd.com/helppage/downApp/jrAppPromote.html" class="link link3" target="_blank">京东金融客户端</a><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#" class="link link4">新人专享188元大礼包</a><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#" class="link link5">扫一扫 让赚钱再轻松一点</a><a href="https://itunes.apple.com/cn/app/id414245413" class="applink jdapp-ios" target="_blank">京东客户端ios版</a><a href="https://storage.jd.com/jdmobile/JDMALL-PC2.apk" class="applink jdapp-android" target="_blank">京东客户端android版</a><a href="https://itunes.apple.com/cn/app/jing-dong-hd/id434374726" class="applink jdapp-ipad" target="_blank">京东客户端ipad版</a><a href="https://itunes.apple.com/cn/app/jing-dong-jin-rong-hui-li/id895682747?mt=8" class="applink wyapp-ios" target="_blank">京东金融客户端ios版</a><a href="http://211.151.9.66/downapp/jrapp_jr188.apk" class="applink wyapp-android" target="_blank">京东金融客户端android版</a></div>			</div>		</li>
			<li class="spacer"></li>
			<li class="fore7 dorpdown" id="ttbar-atte" aid="2_955_6494">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>关注京东
				</div>	
						<div class="dd dorpdown-layer">				<div class="dd-spacer"></div>				<div class="dd-inner" id="ttbar-atte-main"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div>				</div>			</div>		</li>
			<li class="spacer"></li>
			<li class="fore8 dorpdown" id="ttbar-serv">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>客户服务
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
			<li class="spacer"></li>
			<li class="fore9 dorpdown" id="ttbar-navs">
				<div class="dt cw-icon">
					<i class="ci-right"><s>◇</s></i>网站导航
				</div>
				<div class="dd dorpdown-layer"><div class="dd-spacer"></div><div class="dd-inner"><span class="loading"></span></div></div>
			</li>
    	</ul>
		<span class="clr"></span>
    </div>
</div>
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
 
 <div id="nav">
	<div class="w">
		<div class="logo">
			<a href="./jd-index.php" target="_blank" class="fore1" clstag="homepage|keycount|home2013|Homejdlogo"></a>
			<a href="https://home.jd.com/" target="_self" class="fore2" clstag="homepage|keycount|home2013|Homebackm">我的京东</a>
			<a href="./jd-index.php" target="_blank" class="fore3" clstag="homepage|keycount|home2013|Homebackjd">返回京东首页</a>
		</div>
		<div class="navitems">
			<ul>
				<li class="fore-1">
					<a target="_self" href="./jd-index.php" clstag="homepage|keycount|home2013|Homeindex">首页</a>
				</li>
				<li class="fore-3">
					<div class="dl" clstag="click|keycount|myhome|hsz">
						<div class="dt">
							<span class="myjd-set">账户设置</span>
							<b></b>
						</div>
						<div class="dd">
							
							<a tid="_MYJD_info" clstag="Homeyser" href="https://i.jd.com/user/info" target="_self"><span>个人信息</span></a>
							
							<a tid="_MYJD_safe" clstag="Homesafe" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action" target="_self"><span>账户安全</span></a>

							<a tid="_MYJD_accbinde" clstag="Homezhbd" href="https://safe.jd.com/union/index.action" target="_self"><span>账号绑定</span></a>
							
							<a tid="_MYJD_grade" clstag="Homegrade" href="https://usergrade.jd.com/user/grade" target="_self"><span>我的级别</span></a>
							
							<a tid="_MYJD_comments" clstag="homeadd" href="https://easybuy.jd.com/address/getEasyBuyList.action" target="_self"><span>收货地址</span></a>
							
							<a tid="_MYJD_share" clstag="Homeshare" href="https://share.jd.com/share/index.html" target="_self"><span>分享绑定</span></a>
							
							<a tid="_MYJD_rss" clstag="Homeedm" href="https://i-mkt.jd.com/subscribe/settings" target="_self"><span>邮件订阅</span></a>
							
							<a tid="_MYJD_recor" clstag="Homeedm" href="https://usergrade.jd.com/user/consume" target="_self"><span>消费记录</span></a>
							
							<a tid="_MYJD_app" clstag="Homeedm" href="https://fw.jd.com/home/auth_list.action" target="_blank"><span>应用授权</span></a>
							
							<a tid="_MYJD_pay" clstag="Homequick" href="https://authpay.jd.com/card/queryBindCard.action" target="_blank"><span>快捷支付</span></a>
							
							<a tid="_MYJD_zpzz" clstag="Homezpzz" href="https://invoice.jd.com/user/userinfo/zpzz.html" target="_self"><span>增票资质</span></a>
<a tid="_MYJD_qyfp" clstag="Homeqyfp" href="https://corp.jd.com/invoice/commonlist" target="_self"><span>企业发票</span></a>							
<a tid="_MYJD_cgxqd" clstag="Homecgxqd" href="https://kw.jd.com/" target="_self"><span>采购需求单</span></a>
						</div>
					</div>
				</li>
				<li class="fore-4">
					<div class="dl myjd-info" clstag="click|keycount|myhome|hsq">
						<div class="dt ">
							<span>社区</span>
							<b></b>
						</div>
						<div class="dd">
							<a tid="_MYJD_me" clstag="hgr" href="https://me.jd.com/" target="_blank"><span>个人主页</span></a>
							<a tid="_MYJD_activities" clstag="Homeclub" href="https://luck.jd.com/myjd/myJoinActivity.html" target="_self"><span>我的活动</span></a>
							
							<a tid="_MYJD_circle" clstag="Homejoincircle" href="https://group.jd.com/circle/myjoincircle.htm" target="_self"><span>我的圈子</span></a>
							
							<a tid="_MYJD_mycollect" clstag="Homethread" href="https://group.jd.com/thread/mythread.htm" target="_self"><span>我的帖子</span></a>
						</div>
					</div>
				</li>
				<li class="fore-5">
					<a tid="_MYJD_joy" href="https://joycenter.jd.com/" target="_self" clstag="homepage|keycount|home2013|Homemsg">消息<i>28</i></a>
				</li>
			</ul>
		</div>
		<div class="nav-r">
			<div id="search-2014">
					<ul id="shelper" class="hide" style="display: none;"></ul>
					<div class="form">
						<input type="text" onkeydown="javascript:if(event.keyCode==13) search(&#39;key&#39;);" autocomplete="off" id="key" accesskey="s" class="text">
						<button onclick="search(&#39;key&#39;);return false;" class="button cw-icon" type="button"><i></i>搜索</button>
					</div>
			    </div>
			    <div id="settleup-2014" class="dorpdown">
					<div class="cw-icon">
						<i class="ci-left"></i>
						<i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i>
						<a target="_blank" href="./jd-mycart.php">我的购物车</a>
					</div>
					<div class="dorpdown-layer"><div class="spacer"></div><div class="prompt"><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div></div></div>
				</div>
			    <div id="hotwords-2014"><a href="https://sale.jd.com/act/AWhnH15p2qVJ.html" target="_blank" style="color:#C81623;">低至5折</a><a href="https://sale.jd.com/act/AWhnH15p2qVJ.html" target="_blank">领免息券</a><a href="https://sale.jd.com/act/Ae4Yual0DpmMJiz.html" target="_blank">199减100</a><a href="https://sale.jd.com/act/ohXn4qQN3pBIAa.html" target="_blank">低至5折</a><a href="https://sale.jd.com/act/sGL3mYaHypNVlb.html" target="_blank">京东超市</a><a href="https://sale.jd.com/act/4zgkh6Su0b.html?cpdad=1DLSUE" target="_blank">50元话费券</a></div>
		</div>
		<div class="clr"></div>
	</div>
</div>	

    
    

  <link type="text/css" rel="stylesheet" href="./css/myjd.order2015bak.css" source="combo">



<div id="container">
    <div class="w">
        <div id="content">
            <div id="sub">
            	<!--左侧导航栏-->
               	<div id="menu">
	<dl class="fore1">
		<dt id="_MYJD_order">订单中心</dt>
		<dd class="fore1_1 curr" id="_MYJD_ordercenter">
			<a clstag="homepage|keycount|home2013|Homeoder" href="https://order.jd.com/center/list.action" target="_self">我的订单</a>
		</dd>
		<dd class="fore1_2" id="_MYJD_tuan">
			<a clstag="homepage|keycount|home2013|Hometuan" href="https://tuan.jd.com/order/index.php" target="_blank">团购订单</a>
		</dd>
		<dd class="fore1_3" id="_MYJD_locallife">
			<a clstag="homepage|keycount|home2013|Homelife" href="https://life.jd.com/localOrder/iniOrder.do" target="_self">本地生活订单</a>
		</dd>
		<dd class="fore1_4" id="_MYJD_yushou">
			<a clstag="homepage|keycount|home2013|Homeys" href="https://yushou.jd.com/member/qualificationList.action" target="_self">我的预售</a>
		</dd>
		<dd class="fore1_5" id="_MYJD_comments">
			<a clstag="homepage|keycount|home2013|Homecomments" href="https://club.jd.com/mycomments.aspx" target="_self">评价晒单</a>
		</dd>
		<dd class="fore1_6" id="_MYJD_refundment">
			<a clstag="homepage|keycount|home2013|Homerefund" href="https://rps-fm.jd.com/rest/refund/refundList" target="_self">取消订单记录</a>
		</dd>
	</dl>
	<dl class="fore2">
		<dt id="_MYJD_gz">关注中心</dt>
		<dd class="fore2_1" id="_MYJD_product">
			<a clstag="homepage|keycount|home2013|Homefollow" href="https://t.jd.com/home/follow" target="_self">关注的商品</a>
		</dd>
		<dd class="fore2_2" id="_MYJD_vender">
			<a clstag="homepage|keycount|home2013|Homefollowv" href="https://t.jd.com/vender/followVenderList.action" target="_self">关注的店铺</a>
		</dd>
		<dd class="fore2_3" id="_MYJD_followwhat">
			<a clstag="homepage|keycount|home2013|Homewhat" href="https://what.jd.com/my/follow/index" target="_self">关注的专辑</a>
		</dd>
		<dd class="fore2_4" id="_MYJD_brand">
			<a clstag="homepage|keycount|home2013|Homebrand" href="https://t.jd.com/follow/brand/list.action" target="_self">关注的品牌</a>
		</dd>
		<dd class="fore2_5" id="_MYJD_activity">
			<a clstag="homepage|keycount|home2013|Homefollowa" href="https://t.jd.com/activity/followActivityList.action" target="_self">关注的活动</a>
		</dd>
		<dd class="fore2_6" id="_MYJD_history">
			<a clstag="homepage|keycount|home2013|Homelist" href="https://my.jd.com/history/list.html" target="_blank">浏览历史</a>
		</dd>
	</dl>
	
	
	
	
</div>
                
                <div id="menu-ads">
                    <!--广告全部放这里-->
                <div><a href="https://c-nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnymMImvln2Js0HU3q+mnlAr0LpeSNpALCbss46Fg5S8sQYb7iog8VJRd/DurbeYQwISZI7p/OOlX6LABVlykvJwqJOjcdfYtg4LR/8nWWAGIVgecMtJv+c4EI1Fe76tJA/C//tJJ72rtkEJdbDGMUc/+vq47fsJjQamrYXpUmh1LFr4twz/b0egVZFH4hLcnDMZf0GnvcYdnv0/WFgrniLGrclTJiifi7o6C5X5JgH5ik2KVG6EfHIskeR+J3t9W7maGI3r4xzbxqkwzN36Jw2sE&amp;cv=2.0&amp;url=//wan.jd.com/yeyou/gogame.html" target="_blank"><img width="90" height="70" alt="" app="image:poster" src="./images/57d259c2N6770f2c6.jpg"></a></div><div><a href="https://c-nfa.jd.com/adclick?keyStr=z5AXFoIimt1jiDK32+w4mZYsU2J35VXuTltSWhYSnymmwCrDNfNiAwkyAca1Ysqe+4Ci4KgwbyipnAGkQ6KXvkoLIn2hGx/kBqaK6LrIm/wWA954k5k+rEGpxP131Cxkt2zzWxLf+f/hKdgnq53OJKbW7awSmGWDwf/HhysCSgsln6QxwraiE6Hr5M3pXlOyO8kB+sSzSS0dWVpqx287jLMnQRjLX8LeruC5DQu2wwDKXBn/4XyfZBkqZDvr0dRqsYAhmxRmBoISpVNFyZRXL4a+892nOos/0aSRnf6vbMmf9HLeDipRHAKm4vcfN+U1KKFU6qVYkYEbrR18iEkgIA==&amp;cv=2.0&amp;url=//sale.jd.com/act/ABhvmnorORZ8.html" target="_blank"><img width="90" height="70" alt="" app="image:poster" src="./images/5816f758Ncbb6634b.jpg"></a></div></div>
            </div>
            <div id="main">
		<div id="chunjie" class="mb10"></div>
                <div class="mod-main mod-comm mod-order" id="order01">
                    <div class="mt">
                        <h3>我的订单</h3>
                        <div class="extra-r"></div>
                    </div>
                </div>
                <div class="safety-box hide">
                </div>

                <div class="mod-main mod-comm lefta-box" id="order02">
                    <div class="mt">
                        <ul class="extra-l">
                            <li class="fore1"><a href="https://order.jd.com/center/list.action" class="txt curr">全部订单</a></li>
                            <li><a href="https://order.jd.com/center/list.action?s=1" id="ordertoPay" clstag="click|keycount|orderinfo|waitPay" class="txt">待付款</a></li>
                            <li><a href="https://order.jd.com/center/list.action?s=128" id="ordertoReceive" clstag="click|keycount|orderinfo|waitReceive" class="txt">待收货</a><a href="https://order.jd.com/center/list.action?s=128"><em>2</em></a></li>
                            <li><a href="https://club.jd.com/mycomments.aspx" id="ordertoComment" target="_blank" class="txt" clstag="click|keycount|orderinfo|daipingjia">待评价</a><a href="https://club.jd.com/mycomments.aspx"><em>6</em></a></li>
                              							<li class="fore2 "><a href="https://order.jd.com/center/alwaysbuy.action" id="ordertoBuy" clstag="click|keycount|orderinfo|changgoutab"><strong>我的常购商品</strong><span class="new"></span></a></li>
							                              	                            <li class="fore2"><a href="https://order.jd.com/center/tejiaqingcang.action" id="ordertoTejia" clstag="click|keycount|orderinfo|tjqc _1"><strong>特价·清仓</strong><span class="new"></span></a></li>
                                                        
                            <li class="fore2"><a href="https://order.jd.com/center/recycle.action?d=1" clstag="click|keycount|orderlist|dingdanhuishouzhan" class="ftx-03" id="ordertoRecycle">订单回收站</a></li>
                        </ul>
                        <div class="extra-r">
                            <div class="search">
                                <input id="ip_keyword" type="text" class="itxt" value="商品名称/商品编号/订单号" style="color: rgb(204, 204, 204);">
                                <a href="javascript:;" class="search-btn" clstag="click|keycount|orderinfo|search">搜索<b></b></a>
                                <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|gaoji" class="default-btn high-search">高级<b></b></a>
                            </div>
                        </div>
                    </div>

                    <div class="mc">

						
                        <div class="top-search hide">
                            <div class="dl">
                                <span class="label">订单类型：</span>
                                                                <div class="dd">
                                                                                                                                                                                                                        <a href="https://order.jd.com/center/list.action?t=&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|quanbuleixing" class="curr">全部类型</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=0-6-8-9-10-11-13-15-16-17-18-19-21-22-23-24-25-32-33-41-42-49-54-56&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|shiwushangpin">实物商品</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=35-83&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|jipiao">机票</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=39&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|jiudian">酒店</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=45&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|zuche">租车</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=47&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|dujia">度假</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=44&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|jingdian">门票</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=46&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|huoche">火车</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=34-62&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|youxi">游戏</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=37&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|shoujichongzhi">手机充值</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=43&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|dianyingpiao">电影票</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=53&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|yanchupiao">演出票</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=38&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|dianzishu">电子书</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=58&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|shuziyinyue">数字音乐</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=57&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|yingyongshangdian">应用商店</a>
                                                                                                                                                                                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=36&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|caipiao">彩票</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=28-29-201&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|tuangou">团购</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=48-64-65&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|baoxian">保险</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=2&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|duobaodao">夺宝岛</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=99&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|jiayouka">加油卡</a>
                                                                                                                                                                                            <a href="https://order.jd.com/center/list.action?t=98&amp;d=1&amp;s=4096" target="_self" clstag="click|keycount|orderlist|jiayouka">一元抢宝</a>
                                                                                                                                                                                                        </div>
                                                            </div>
                            <div class="dl">
                                <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|fanhui" class="btn-9">返回</a>
                            </div>
                            <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|closehighserach" class="ts-del"></a>
                        </div>

                                                <table class="td-void order-tb">
                            <colgroup>
                                <col class="number-col">
                                <col class="consignee-col">
                                <col class="amount-col">
                                <col class="status-col">
                                <col class="operate-col">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th><div class="ordertime-cont">
									<div class="time-txt">近三个月订单<b></b><span class="blank"></span></div>
									<div class="time-list">
	                                        <ul>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="1&amp;s=4096" clstag="click|keycount|orderlist|zuijinsangeyue" class="curr"><b></b>近三个月订单</a></li>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="2&amp;s=4096" clstag="click|keycount|orderlist|jinniannei"><b></b>今年内订单</a></li>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="2015&amp;s=4096" clstag="click|keycount|orderlist|2015"><b></b>2015年订单</a></li>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="2014&amp;s=4096" clstag="click|keycount|orderlist|2014"><b></b>2014年订单</a></li>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="2013&amp;s=4096" clstag="click|keycount|orderlist|2013"><b></b>2013年订单</a></li>
	                                        	                                            <li><a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" _val="3&amp;s=4096" clstag="click|keycount|orderlist|before_2013"><b></b>2013年以前订单</a></li>
	                                        	                                        </ul>
	                                    </div>
									</div>
									<div class="order-detail-txt ac">订单详情</div>
									</th>
                                    <th>收货人</th>
                                    <th>金额</th>
                                    <th>
                                        <div class="deal-state-cont" id="orderState">
                                            <div class="state-txt">全部状态<b></b><span class="blank"></span></div>
                                            <div class="state-list">
                                                <ul>
                                                    <li value="4096">
                                                        <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|quanbuzhuangtai" class="curr"><b></b>全部状态</a>
                                                    </li>
                                                    <li value="1">
                                                        <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|dengdaifukuan"><b></b>等待付款</a>
                                                    </li>
                                                    <li value="128" clstag="click|keycount|orderlist|dengdaishouhuo">
                                                        <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none"><b></b>等待收货</a>
                                                    </li>
                                                    <li value="1024">
                                                        <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|yiwancheng"><b></b>已完成</a>
                                                    </li>
                                                    <li value="-1">
                                                        <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" clstag="click|keycount|orderlist|yiquxiao"><b></b>已取消</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            
    <?php 
		//这个页面是用来展示登录用户的订单
		//这个页面需要的信息来自于两张数据表，订单表，详情表
		$link = mysqli_connect("localhost","root","123456");
		mysqli_select_db($link,"web_shop");
		mysqli_set_charset($link,"utf8");
		$sqlone = "select * from orders where uid ={$_SESSION['login']['uid']}";
		$result = mysqli_query($link,$sqlone);
		while($res = mysqli_fetch_assoc($result)){
			
	?>
	
	<tbody id="tb-43244043248">
    <tr class="sep-row">
		<td colspan="5"></td>
	</tr>
    <tr class="tr-th">
                <td colspan="5">
            <span class="gap"></span>
            <span class="dealtime" title="2016-11-01 23:43:57"><?php echo date("Y-m-d H:i:s",$res['addtime'])?></span>
            <input type="hidden" id="datasubmit-43244043248" value="2016-11-01 23:43:57">

            <span class="number">订单号：
            <a name="orderIdLinks" id="idUrl43244043248" target="_blank" href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" clstag="click|keycount|orderinfo|order_num"><?php echo $res['uid']?></a>
            </span>

            <div class="tr-operate">
                    <span class="order-shop">
                    <span class="shop-txt">京东</span>
                    <a class="btn-im btn-im-jd" href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" title="联系客服" clstag="click|keycount|orderlist|ziyingchatim"></a>
                    </span>
            </div>
        </td>
    </tr>

    <tr class="tr-bd" id="track43244043248" oty="0,1,70">
            <td style='padding:0px;'>
                <?php
					$status = [ 1=>"未出库",
								2=>"已出库",
								];
					$sqltwo = "select * from detail where orderid = {$res['id']}";
					$resultt = mysqli_query($link,$sqltwo);
					while($ress = mysqli_fetch_assoc($resultt)){
						$sqlthree = "select goodspic from goods where id = {$ress['goodsid']}";
						$resss = mysqli_query($link,$sqlthree);
						$resulttt = mysqli_fetch_assoc($resss);
				?>
                <!--  每一种商品  -->
                <div style="padding:14px 0;border:1px solid #e5e5e5;border-collapse:collapse;">
                        <div class="goods-item p-11362614">
                            <div class="p-img">
                                <a href="https://item.jd.com/11362614.html" clstag="click|keycount|orderinfo|order_product" target="_blank">
                                     <img class="" src="../admin/goods/upload/<?php echo $resulttt['goodspic']?>" title="C语言入门经典（第5版）" data-lazy-img="done" width="60" height="60">
                                </a>
                            </div>
                            <div class="p-msg">
                                <div class="p-name"><a href="https://item.jd.com/11362614.html" class="a-link" clstag="click|keycount|orderinfo|order_product" target="_blank" title="C语言入门经典（第5版）"><?php echo "{$ress['name']}";?></a></div>
                                                                                            <div class="p-extra">
                                            <ul class="o-info">
                                                <li><span class="o-match J-o-match" data-sku="11362614"><i></i><em>找搭配</em></span></li>
                                            </ul>
                                        </div>
                                                                                </div>
                        </div>
                        <div class="goods-number">
						x<?php echo "{$ress['num']}";?>
                        </div>
                        <div class="goods-repair"></div>
                        <div class="clr"></div>
                </div> 
					<?php }?>
                <div class="tr-bd" style="padding:14px 0;border:1px solid #e5e5e5;border-collapse:collapse;">
                    <!-- <td> -->
                        <div class="tr-pd-more"><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">查看更多商品&gt;</a></div>
                        <div class="clr"></div>
                    <!-- </td> -->
                </div>
                
                
                 
            </td>

            <!--  订单的其它内容  -->
            <td>
                <div class="consignee tooltip">
                    <span class="txt"><?php echo $res['linkman']?></span><b></b>
                    	
                </div>
            </td>
            <td >
                <div class="amount">
                	<span>总额 ￥<?php echo $res['total']?></span> <br>
                	                    	<strong>应付</strong> <br>
                    	<strong>￥<?php echo $res['total']?></strong> <br>
                                        <span class="ftx-13">货到付款</span>
                </div>
            </td>
            <td>
                <div class="status">
                    <span class="order-status ftx-04">
                                            
            	<?php echo $status[$res['status']]?>
            
                                        </span>
                    <br>
                                        <div class="tooltip" _orderid="43244043248" _ordertype="0" _orderstatus="7" _orderurl="//details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" _ordership="70">
                        <i class="auto-icon"></i>
                        跟踪
                        <i class="circle-icon"></i>
                        <div class="prompt-01" style="display: none;">
                            <div class="pc">
                                <div class="p-tit">
                                                                            普通快递
                                                                    </div>
                                <div class="logistics-cont" id="tracker43244043248"><ul><li class="first"><i class="node-icon"></i><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">您的订单已经拣货完成</a><br>您的订单预计2016-11-02送达您手中<div class="ftx-13">2016-11-02 17:48:44</div></li><li><i class="node-icon"></i><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">您的订单已经打印完毕</a><div class="ftx-13">2016-11-02 16:15:33</div></li><li><i class="node-icon"></i><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">您的订单已经进入京东北京50号库准备出库</a><div class="ftx-13">2016-11-02 00:24:02</div></li><li><i class="node-icon"></i><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">您的订单由于送货时间未到不能出库</a><div class="ftx-13">2016-11-01 23:43:58</div></li><li><i class="node-icon"></i><a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" target="_blank">您提交了订单，请等待系统确认</a><div class="ftx-13">2016-11-01 23:43:57</div></li></ul></div>
                            </div>
                            <div class="p-arrow p-arrow-left"></div>
                        </div>
                    </div>
                    
                                        <a href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5" clstag="click|keycount|orderlist|dingdanxiangqing" target="_blank">订单详情</a>
                                    </div>
            </td>
            <td >
                <div class="operate">
                                        <div id="pay-button-43244043248" _baina="0"></div>
                <a class="a-link order-cancel" href="javascript:void(0);" _oid="43244043248" _passkey="42BA3A2A715A28F4540B508F726F0E0E" _url="new/cancelOrder.html?1&amp;cancalText=0&amp;isHaveGiftOrder=0&amp;status=0">取消订单</a>
                <br>
                <a class="J-reminder" href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#" data-orderid="43244043248">催单</a><br>
                </div>
            </td>
    </tr>
     <!--  其它内容结束   -->           
        
      
        
   
        
                
            </tbody>
            <?php
				}
			?>                                                                                                                                                                                                            
                                                                                                                                                                                                           		
		
                                                                                                                                                                                                                        
                                                                                                                                                                                                                        
                                                                                                                                                                                                            		
		
                                                                                                                                                                                                                        
                                                                                                                                                                                                                        
                                                                                                                                                                                                                        
                                                                                                                                                                                                                        
                                                                                                                                                    </table>

						                        <div class="mt20">
                            <div class="pagin fr">
                                                        
                                    <!--  <span class="text">共8条记录</span>    <span class="text">共1页</span> -->
                <span class="prev-disabled">上一页<b></b></span>
       
		<!-- <span class="prev-disabled">首页</span> -->
                                                                                          <a class="current">1</a>                                                                                       	<!-- <span class="next-disabled">末页</span>  -->
    <span class="next-disabled">下一页<b></b></span>
            
                                </div>
                            <div class="clr"></div>
                        </div>
                        
                        
                    </div>
                </div>

                                <div class="mod-main mod-comm" id="guessing-liked" data-widget="tabs" style="display:none;">
                    <div class="mt">
                        <h3>猜你喜欢</h3>
                        <div class="extra-r">
                            <div class="switch-items">
                                <a class="curr" data-widget="tab-item" href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none">1</a>
                                <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" data-widget="tab-item">2</a>
                                <a href="https://order.jd.com/center/list.action?search=0&amp;d=1&amp;s=4096#none" data-widget="tab-item">3</a>
                            </div>
                        </div>
                    </div>
                    <div class="mc">
                        <div class="goods-list">
                        </div>
                    </div>
                </div>
                

                            </div>
        </div>
        
    </div>
</div>

  
</body></html>