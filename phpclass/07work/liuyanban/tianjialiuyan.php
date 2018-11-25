<?php
	//接受liuyan.php 这个页面提交过来的留言数据
		//var_dump($_POST);
		//验证标题不能玩为空
		
		if(empty($_POST['title'])){
			header("location:./liuyan.php?e=1");
			exit;
		}
		
		//if(empty($_POST['author'])){
			//header("location:./liuyan.php?e=2");
			//exit;
		
		if(empty($_POST['content'])){
			header("location:./liuyan.php?e=3");
			exit;
		}
	
	// 把数据处理
	$result = implode($_POST,"#")."@";
	//var_dump($result);
	
	
	//把处理的数据写入liuyanban.db数据文件中
	file_put_contents('./liuyanban.db',$result,FILE_APPEND);
	header("location:./index.php");
?>