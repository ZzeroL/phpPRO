<!DOCTYPE html>
<html>
	<head>
		<meta charset="utd-8">
		<title>留言板</title>
	</head>
	<style>
		.biaoti{
			background-color:#ccccff;
		}
		table{
			border-right:1px solid #666;
			border-bottom:1px solid #666;
			border-left:1px solid #666;
		}
	</style>
	<body>
		<?php
			include ("./menu.php");
		?>
		<center>
			
				<form action="" method="post">
					<div>
						<table width="800" >
							<tr>
								<td colspan="2"  class="biaoti"><h2 align="center">进行留言</h2></td>
							</tr>
							<tr>
								<td align="right">留言标题:</td>
								<td><input type="text" name="title"></td>
							</tr>
							<tr>
								<td align="right">留言者:</td>
								<td><input type="text" name="author"></td>
							</tr>
							<tr>
								<td align="right">留言内容:</td>
								<td><textarea rows="10" cols="70" name="content"></textarea></td>
							</tr>
						</table>
					</div>
					<div>
							<input type="submit" value="立即留言">
						</div>
				</form>
		</center>
	</body>
</html>