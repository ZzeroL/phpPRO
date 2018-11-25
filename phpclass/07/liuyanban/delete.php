<?php
	//这个文件是删除留言的文件
	//思路：
		echo "<pre>";
	//1 把liuyan.db的数据文件取出来
	$result = file_get_contents("./liuyanban.db");
	var_dump($result);
	//2 取出来了，是一个大的字符串，这个字符串是所有的留言，我要删除的是某一条，那么我就得把这个大字符串，拆分成一条条的留言，
		//把取出的字符串最右边的@符号去掉，因为没有用了
		$result = rtrim($result,"@");
		//var_dump($result);
		//把去掉最后的@符号的字符串使用中间的@符号拆分为数组，数组的内容就是一条条的留言信息
		$array = explode('@',$result);  
		
	//3 index.php 页面告诉我删除谁
		$id = $_GET['id'];
	//4 拿起50m大刀，把那个要删除的，剁了
		unset($array[$id]);
	//5 把剩下的尸体，放回liuyan.db文件中
		
		if(empty($array)) {
			file_put_contents("./liuyanban.db","");
		}else{
			//做判断，如果没有删除完，那么把剩余的//需要把数组再次拼装成为字符串
			$result = implode($array,"@")."@";
			file_put_contents("./liuyanban.db",$result);
		}
		
	
	//5.1 如果都删除完了，一条都没有了，那么就返回去一个空字符串即可
		
	//6 页面跳转回index.php  
		header("location:./index.php");