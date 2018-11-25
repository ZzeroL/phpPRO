<!DOCTYPE html>
<html>
	<head>
		<meta charset="utd-8">
		<title>留言板</title>
		<meta http-equiv="refresh" content="1">
	</head>
	<body>
		<?php
			include ("./menu.php");
		?>
		<center>
			<h2>已有留言</h2>
				<table border="1" width="400" cellspacing="0" bordercolor="pink">
					<tr align="center">
						<td>留言标题</td>
						<td>留言者</td>
						<td>留言内容</td>
						<td>管理</td>
					</tr>
					<?php
						//从liuyanban.db拿留言
						$result = file_get_contents("./liuyanban.db");
							//var_dump($result);
						if($result == ""){
							die("没有留言，请去留言");
						}
						//去掉右边多的一个符号
						$result = rtrim($result,'@');
						//拆分字符串为数组
						$result = explode('@',$result);
							//var_dump($result);
						
						//使用循环遍历一条条留言
						foreach ($result as $key=>$value){
								//var_dump($value);
							//拆分数组中的字符串为另一数组 
							$array = explode('#',$value);
								//var_dump($array);
							echo "<tr align='center'>";
								echo"<td>".$array[0]."</td>";
								echo"<td>".$array[1]."</td>";
								echo"<td>".$array[2]."</td>";
								echo"<td><a href='delete.php?id={$key}'>删除</a></td>";
							echo"</tr>";
						}
					?>
				</table>
		</center>
	</body>
</html>