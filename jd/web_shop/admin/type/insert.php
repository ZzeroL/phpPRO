<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="../css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <script type="text/javascript" src="../js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="../index.php">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.mycodes.net">管理员</a></li>
                <li><a href="http://www.mycodes.net">修改密码</a></li>
                <li><a href="http://www.mycodes.net">退出</a></li>
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
                        <li><a href="./design.php"><i class="icon-font">&#xe008;</i>会员浏览</a></li>
                        <li><a href="#"><i class="icon-font">&#xe005;</i>会员添加</a></li>
                        <li><a href="./design.php"><i class="icon-font">&#xe006;</i>分类浏览</a></li>
                        <li><a href="#"><i class="icon-font">&#xe004;</i>分类添加</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">分类管理</a><span class="crumb-step">&gt;</span><span>分类添加</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doadd.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
						<?php
						//获取了id
							$id = @$_GET['id'];
							
							//判断是不是添加根分类
							if(isset($_GET['id'])){
								//查询id的类别的数据
								//链接数据库
								$link = mysqli_connect("localhost","root","123456");
								mysqli_select_db($link,"web_shop");
								mysqli_set_charset($link,"utf8");
								$sql = "select * from type where id = {$id}";
								//执行这条sql语句，
								$result = mysqli_query($link,$sql);
								$res = mysqli_fetch_assoc($result);
							}
							
						?>
							<tr><th>父类：</th>
                                <td><input class="common-text" name="fathername" size="50" value="<?php echo isset($_GET['id'])?$res['name']:" "?>" type="text" readonly></td>
								<!--两个隐藏域存放pid path-->
							   <input type="hidden" name="pid" value="<?php echo isset($_GET['id'])?$res['id']:"0";?>">
							   <input type="hidden" name="path" value="<?php echo isset($_GET['id'])?$res['path'].$res['id'].",":"0,";?>">
                            </tr>
							<tr>
                                <th>子类：</th>
                                <td><input class="common-text" name="name" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>