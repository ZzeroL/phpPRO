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
                <li><a class="on" href="index.html">首页</a></li>
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
                        <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">会员管理</a><span class="crumb-step">&gt;</span><span>会员修改</span></div>
        </div>
		
		<?php
			//修改用户界面
			//获取id
			$id = $_GET['id'];
			//连接数据库
			$link = mysqli_connect("localhost","root","123456");
			mysqli_select_db($link,"web_shop");
			mysqli_set_charset($link,"utf8");
			//像数据库中写入数据库语句
			$sql = "select * from users where id = {$id}";
			$result = mysqli_query($link,$sql);
			//解析一下结果
			$res = mysqli_fetch_assoc($result);
		?>
        
		
		<div class="result-wrap">
            <div class="result-content">
                <form action="./doupdate.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <!--隐藏域-->
					<input type = "hidden" name="id" value="<?php echo $res['id'];?>">
					<table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>权限：</th>
                            <td>
								<?php 
									$s1 = '';
									$s2 = '';
									if($res['quanxian']==1){
										$s1 = 'selected';
									}else if($res['quanxian']==2){
										$s2 = 'selected';
									}
								?>
                                <select name="quanxian" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <option value="1" <?php echo $s1;?>>管理员</option>
									<option value="2" <?php echo $s2;?>>普通用户</option>
                                </select>
                            </td>
                        </tr>
							<tr>
                                <th>账号：</th>
                                <td><input class="common-text" name="username" size="50" type="text" value="<?php echo $res['username']?>"></td>
                            </tr>
                            <tr>
                                <th>名字：</th>
                                <td><input class="common-text" name="name" size="50" type="text" value="<?php echo $res['name']?>"></td>
                            </tr>
							<tr>
                                <th>电话：</th>
                                <td><input class="common-text" name="phone" size="50" type="text" value="<?php echo $res['phone']?>"> </td>
                            </tr>
							<tr>
                                <th>邮箱：</th>
                                <td><input class="common-text" name="email" size="50" type="text" value="<?php echo $res['email']?>"></td>
                            </tr>
                            
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="确认修改" type="submit">
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