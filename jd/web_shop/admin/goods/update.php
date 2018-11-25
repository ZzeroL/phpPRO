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
                        <li><a href="./design.php"><i class="icon-font">&#xe008;</i>商品浏览</a></li>
                        <li><a href="#"><i class="icon-font">&#xe005;</i>商品添加</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">商品管理</a><span class="crumb-step">&gt;</span><span>商品修改</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="./doupdate.php" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>选择分类：</th>
                            <td>
                                <select name="goodstype" id="catid" class="required">
								<?php
									
									//1 连接数据库
									$link = mysqli_connect("localhost","root","123456");
									//2 选择数据库
									mysqli_select_db($link,"web_shop");
									//3 设置编码为utf-8
									mysqli_set_charset($link,"utf8");
									$sqlone = "select * from type";
									$result = mysqli_query($link,$sqlone);
									while($res = mysqli_fetch_assoc($result)){
										echo "<option value='{$res['id']}'>{$res['name']}</option>";
									}
									
								?>
								</select>
                            </td>
                        </tr>
							<?php
								$sqltwo = "select * from goods where id={$_GET['id']}";
								$result = mysqli_query($link,$sqltwo);
								$res = mysqli_fetch_assoc($result);
							?>
                            <tr>
                                <th><i class="require-red">*</i>商品名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="goodsname" size="50" value="<?php echo $res['goodsname']?>" type="text">
                                </td>
                            </tr>
							<tr>
                                <th><i class="require-red">*</i>商品图片：</th>
                                <td><img width="100" src = "./upload/<?php echo $res['goodspic']?>"></td>
								<input type="hidden" name = "oldgoodspic" value = "<?php echo $res['goodspic']?>">
								<input type="hidden" name = "id" value = "<?php echo $res['id']?>">
							</tr>
							<tr>
                                <th><i class="require-red">*</i>商品图片：</th>
                                <td><input name="goodspic" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
							</tr>
                            <tr>
                                <th>商品单价：</th>
                                <td><input class="common-text" name="price" size="50" value="<?php echo $res['price']?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>商品库存：</th>
                                <td><input class="common-text" name="stock" size="50" value="<?php echo $res['stock']?>" type="text"></td>
                            </tr>
                            <tr>
                                <th>商品描述：</th>
                                <td><textarea name="miaoshu" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo $res['miaoshu']?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="确认修改" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
					</table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>