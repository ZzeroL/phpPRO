<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
		<meta http-equiv="refresh" content="1">
	</head>
	<body>
		<?php
			include("./menu.php");
		?>
		<center>
		<h2>进行留言</h2>
			<table border="1" width="600"  cellspacing="0" bordercolor="pink"> 
			<tr align="center">
				<td>留言标题</td>
				<td>留言者</td>
				<td>留言内容：</td>
				<td>操作</td>
			</tr>
			<?php
				//这个页面是用来显示我们的留言内容
				//思路：
				//1 从liuyan.db数据文件中把留言拿到
					//echo "<pre>";
					$result = file_get_contents("./liuyanban.db");
					//判断如果取出的数据是一个空字符串，那么就停止程序运行。给出提示
					if($result == "") {
						die("<font color='green' size='7'>没有数据，请去留言！</font>");
					}  
					//把取出的字符串最右边的@符号去掉，因为没有用了
					$result = rtrim($result,"@");
					//var_dump($result);
					//把去掉最后的@符号的字符串使用中间的@符号拆分为数组，数组的内容就是一条条的留言信息
					$array = explode('@',$result);
					//var_dump($array);
					//echo "<hr>";
					//使用循环把一条条的留言遍历
					foreach($array as $key => $values) {
						//var_dump($values);
						//再遍历中把一条条留言再通过#拆分成为留言标题，留言者和留言内容
						$res = explode("#",$values);
						//var_dump($res);
						//把拆分好的三个部分，通过数组下标取值的方式写到<td>标签中，循环显示
						echo "<tr align='center'>";
							echo "<td>".$res[0]."</td>";
							echo "<td>".$res[1]."</td>";
							echo "<td>".$res[2]."</td>";
							echo "<td><a href='./delete.php?id={$key}'>删除</a></td>";
						echo "</tr>";
					}
			
			?>
			</table>
		</center>
	</body>
</html>