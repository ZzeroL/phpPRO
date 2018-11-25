<!DOCTYPE html>
<html>
	<head>
		<title>登录</title>
		<style>
			body{
				margin:0px;
				padding:0px;
				background:url("./img/timg.jpg") no-repeat;
			}
			.top{
				width:1920px;
				height:50px;
				background-color:#dad6c4;
			}
			.topleft{
				width:270px;
				height:50px;
				margin-left:200px;
				float:left;
				
			}
			.topleft p{
				font-size:20px;
				color:#5d5f62;
			}
			.topright{
				width:200px;
				height:50px;
				margin-right:200px;
				float:right;
			}
			.topright p{
				font-size:20px;
				color:#5d5f62;
				float:left;
				padding-left:20px;
			}
			.content{
				width:1920px;
				height:900px;
				
			}
			.zhongjian{
				width:920px;
				height:500px;
				margin:0px auto;
				margin-top:200px;
			}
			.zhongjianzuo{
				width:300px;
				height:500px;
				background-color:rgba(10,139,212,0.5);
				float:left;
				border-top-left-radius:20px;
				border-bottom-left-radius:20px;
			}
			.zhongjianshang{
				width:200px;
				height:80px;
				margin-top:100px;
				margin-left:50px;
				color:white;
				
			}
			
			.zhongjianxia{
				width:160px;
				height:80px;
				position:relative;
				top:200px;
				left:70px;
				color:white;
				
			}
			.zhongjianyou{
				width:620px;
				height:500px;
				background-color:rgba(222,222,212,0.5);
				float:left;
				border-top-right-radius:20px;
				border-bottom-right-radius:20px;
			}
			.login{
				width:200px;
				height:100px;
				margin-left:50px;
				
			}
			.login p{
				color:#2591b7;
				font-size:50px;
			}
 			.name{
				width:500px;
				height:100px;
				margin-left:50px;
				position:relative;
				top:100px;
				border:1px solid black;
				border-radius:20px;
				background-color:rgba(10,139,212,0.5);
			}
			
		</style>
	</head>
	<body>
		<div class="top">
			<div class="topleft">
				<p>Welcome to 16物联网 V2.0</p>
			</div>
			<div class="topright">
				<p>中文</p><p>|</p>&nbsp;&nbsp;<p>英文</p>
			</div>
		
		</div>
		<div class="content"> 
			<div class="zhongjian">
				<div class="zhongjianzuo">
					<div class="zhongjianshang">
					<h1>Class Team</h1>
					</div>
					<div class="zhongjianxia">
					<h1>Welcome</h1>
					</div>
				</div>
				<div class="zhongjianyou">
					<div class="login">
						<p>Login</p>
					</div>
					<form action="dologin.php" method="post">
						<div class="name">
							<center>
							请输入账号：<input type="text" name="username"><br><br>
							请输入密码：<input type="password" name="pass"><br>
							</center>
						</div>
						<div>
							<button type="submit"  style="width:200px; height:50px;border-radius:20px;background-color:#00bfff;font-size:24px;position:relative;top:160px;left:100px;">登录</Button>
							<a href="./register.php" style="width:200px; height:50px;border-radius:20px;background-color:#00bfff;font-size:24px;color:black;text-decoration:none;position:relative;top:160px;left:180px;">注册</Button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>



	