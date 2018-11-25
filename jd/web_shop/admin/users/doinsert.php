<head>
	<meta charset="utf-8">
</head>
<?php
	//检测项目栏是否为空
	if($_POST['quanxian']!=null){
		if($_POST['username']!=null){
			if($_POST['password']!=null){
				if($_POST['name']!=null){
					if($_POST['phone']!=null){
						if($_POST['email']!=null){
							//添加用户文件
							//连接数据库，把数据写入数据库
							$link = mysqli_connect("localhost","root","123456");
							mysqli_select_db($link,"web_shop");
							mysqli_set_charset($link,"utf8");
							//准备插入sql语句
							$sql = "insert into users(quanxian,username,password,name,phone,email)
							values ('{$_POST['quanxian']}','{$_POST['username']}','{$_POST['password']}','{$_POST['name']}','{$_POST['phone']}','{$_POST['email']}')";
							//把sql语句插入到数据库中
							$result = mysqli_query($link,$sql);
							//判断是否成功，成功是真
							if($result){
								header("location:./design.php");
							}else{
								echo "插入失败";
							}
						}else{echo "邮箱不能为空";}
					}else{echo "电话不能为空";}
				}else{echo "姓名不能为空";}
			}else{echo "密码不能为空";}
		}else{echo "账号不能为空";}
	}else{echo "请选择身份";}
	
?>