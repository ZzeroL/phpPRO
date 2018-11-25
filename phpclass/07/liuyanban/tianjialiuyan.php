<?php
	//思路：
	//1 接收liuyan.php 这个页面提过来过的留言数据
		//v2.0版本，开发成员，全体同学。
		//功能判断输入的内容是否是空的，如果是空的，那么跳转到表单页面继续书写，如果都不为空，那么代码继续执行
		//验证留言的标题不能为空
		if(empty($_POST['title'])){
			header("location:./liuyan.php?e=1");
			exit;//程序停止，不用继续执行
		}
		var_dump(htmlspecialchars($_POST['title']));
		exit;
	//2 把数据处理
		$result = implode($_POST,"#")."@";
		//var_dump($result);
	//3 把处理的数据写入liuyan.db数据文件中
		file_put_contents('./liuyanban.db',$result,FILE_APPEND);
		
	//4 页面跳转 
	    header("location:./index.php");  