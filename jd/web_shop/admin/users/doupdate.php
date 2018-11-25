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
							//修改用户文件
							//连接数据库，把数据写入数据库
							$link = mysqli_connect("localhost","root","123456");
							mysqli_select_db($link,"web_shop");
							mysqli_set_charset($link,"utf8");
							//准备修改用户数据的sql语句
							$sql = "update users set quanxian = '{$_POST['quanxian']}',username = '{$_POST['username']}',name = '{$_POST['name']}',phone= '{$_POST['phone']}',email= '{$_POST['email']}' where id = {$_POST['id']}";
							//把sql语句插入到数据库中
							$result = mysqli_query($link,$sql);
							//判断是否成功，成功是真
							if($result){
								header("location:./design.php");
							}else{
								echo "修改失败";
							}	
						}else{echo "邮箱不能为空";}
					}else{echo "电话不能为空";}
				}else{echo "姓名不能为空";}
			}else{echo "密码不能为空";}
		}else{echo "账号不能为空";}
	}else{echo "请选择身份";}
?>