<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div id='header'>
		<a href=''><img id='logo' src='./images/logo.png'></a>
		<img id='hy' src='./images/hy.png'>
	</div>
	<div id='mainbody'>
		<div id='content'>
			<div id='login-form'>
			  <div id='lf-top'>
			    <span id='lf-top-1'>扫码登录</span>
				<span id='lf-top-2'>账户登录</span>
			  </div>
			  <div id='lf-notice'>公共场所不建议自动登录，以防账号丢失</div>
			  <form action='./jd-dologin.php' method='POST'>
			    <div id='lf-uname'>
				   <i></i>
				   <input  type='text' name='username' />
				</div>
				<div id='lf-upwd'>
				   <i></i>
				   <input  type='password' name='password' />
				</div>
				<div id='lf-auto'>
					<span><input type='checkbox'>自动登录</span>
					<span>忘记密码</span>
				</div>
				<input id='lf-submit' type='submit' value='登&nbsp;&nbsp;&nbsp;录'>
				<div id='lf-bottom'>
                   <span>京东钱包</span>
                   <span>QQ</span>
                   <span>微信</span>
                   <span><i></i><a href="./jd-reg.php">立即注册</a></span>
				</div>
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
	</div>
	<div id='footer'>
        <div id='dcwj'>登录页面，调查问卷</div>
        <div style='clear:both;'></div>
        <div id='footer-2'>关于我们 | 联系我们 | 人才招聘 | 商家入驻 | 广告服务 | 手机京东 | 友情链接 | 销售联盟 | 京东社区 | 京东公益 | English Site<br>
            Copyright&copy; 2004-2016 京东JD.com版权所有
        </div>
    </div>
</body>
</html>