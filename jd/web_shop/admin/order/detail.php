<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="../css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>

<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="../index.php">首页</a></li>
                <li><a href="http://www.mycodes.net/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="../logout.php">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
<div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="./design.php"><i class="icon-font">&#xe008;</i>订单浏览</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">订单浏览</span></div>
        </div>
        <div class="result-wrap">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>商品名称</th>
                            <th>商品图片</th>
                            <th>商品单价</th>
                            <th>商品描述</th>
                        </tr>
						
						<?php 
							$link = mysqli_connect("localhost","root","123456");
							mysqli_select_db($link,"web_shop");
							mysqli_set_charset($link,"utf8");
							$sql = "select * from goods where id in( select goodsid from detail where orderid = {$_GET['orderid']})";
							$result = mysqli_query($link,$sql);
							//把集合解析成数组
							while($res = mysqli_fetch_assoc($result)){
						?>
                        <tr>
                            <td class="tc"><?php echo $res['id']?></td>
                            <td><?php echo $res['goodsname']?></td>
                            <td><img width="80" src="../goods/upload/<?php echo $res['goodspic']?>"></td>
                            <td><?php echo $res['price']?></td>
                            <td><?php echo $res['miaoshu']?></td>
                            
                        </tr>
						<?php
							}
						?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>