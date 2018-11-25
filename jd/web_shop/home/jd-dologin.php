<?php
		session_start();
		if(empty($_POST['username'])){
			header("location:./login.php?e=1");
			exit;
		}
		if(empty($_POST['password'])){
			header("location:./login.php?e=2");
			exit;
		}
		//1 连接数据库
			$link = mysqli_connect("localhost","root","123456");
		//2 选择数据库
			mysqli_select_db($link,"web_shop");
		//3 设置编码为utf-8
			mysqli_set_charset($link,"utf8");
		//判断账号	
		//4 查询输入的账号是否存在
		//插入sql语句
			$sql = "select username from users where username='{$_POST['username']}'";
			$result = mysqli_query($link,$sql);
		//解析一下这个结果对象，看看对象中有没有账号，有就是一个数组没有就是空
			$res = mysqli_fetch_assoc($result);
		//7 判断如果是null 就是没有账号，如果不是null，就是有账号
			if($res!=null){
				//有账号再去查看密码，如果没有账号，就告诉账号不存在
				//判断密码
				$sql2 = "select id,password from users where username='{$_POST['username']}' and password='{$_POST['password']}'";
				//把sql语句发送到数据库
				$result = mysqli_query($link,$sql2);
				//解析一下这个结果对象，看看对象中有没有密码，有就是一个数组，没有就是null
				$res = mysqli_fetch_assoc($result);
				
				if(!($res == null)){
					//密码正确，把用户名放入session中
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['login']['uid'] = $res['id'];
					//跳转页面到首页
					header("location:./jd-index.php");
				}else{
					//密码错误
					echo "密码错误";
				}
			}else{
				die("账号不存在，请联系官方！");
			}
?>