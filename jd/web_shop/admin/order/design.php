<?php date_default_timezone_set("PRC")?>
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
                        <li><a href="#"><i class="icon-font">&#xe008;</i>订单浏览</a></li>
                        <li><a href="./insert.php"><i class="icon-font">&#xe008;</i>会员添加</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="../index.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">会员管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>收货人</th>
                            <th>收货地址</th>
                            <th>联系电话</th>
                            <th>购买时间</th>
                            <th>总金额</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
						
						<?php 
						//定义一个数组，用来显示权限
							$status = [1 => '<font color="red">新订单</font>',
									   2 => '<font color="green">已发货</font>',
									   3 => '<font color="blue">已收货</font>'
										];
							$link = mysqli_connect("localhost","root","123456");
							mysqli_select_db($link,"web_shop");
							mysqli_set_charset($link,"utf8");
							$sql = "select * from orders";
							$result = mysqli_query($link,$sql);
							//把集合解析成数组
							while($res = mysqli_fetch_assoc($result)){
								
							
						?>
                        <tr>
                            <td class="tc"><?php echo $res['id']?></td>
                            <td><?php echo $res['linkman']?></td>
                            <td><?php echo $res['address']?></td>
                            <td><?php echo $res['phone']?></td>
                            <td><?php echo date("Y-m-d H:m:s",$res['addtime'])?></td>
                            <td><?php echo $res['total']?></td>
                            <td><?php echo $status[$res['status']]?></td>
                            <td>
                                <a class="link-update" href="./status.php?id=<?php echo $res['id']?>">修改状态</a>
                                <a class="link-del" href="./detail.php?orderid=<?php echo $res['id']?>">订单详情</a>
                            </td>
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