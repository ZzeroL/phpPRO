<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link href="../css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="./dologin.php" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username"  id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password"  id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
				<?php
					switch(@$_GET['e']){
						case 1:echo "用户名不能为空";
						 break;
						case 2: echo "密码不能为空";
						 break;
						case 3: echo "您没有权限登录";
						 break; 
						default:
						 break;
					}
				?>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="./index.php" target="_blank">返回首页</a> &copy;2018 Powered by <a href="http://www.mycodes.net/" target="_blank">ADMIN</a></p>
</div>
</body>
</html>