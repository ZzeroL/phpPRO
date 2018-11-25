<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
	</head>
	<body>
		<?php
			include("./menu.php");
			session_start();
		?>
		<center>
		<h2>进行留言</h2>
			<form action="tianjialiuyan.php" method="post">
				<table width="400">
					<tr>
						<td align="right">留言标题：</td>
						<td><input type="text" name="title"></td>
					</tr>
					<tr>
						<td align="right">留言者：</td>
						<td><input type="text" name="author" value="<?php echo $_SESSION['username']?>" disabled></td>
					</tr>
					<tr>
						<td align="right">留言内容：</td>
						<td><textarea rows="10" cols="30" name="content"></textarea></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="确认留言"></td>
					</tr>
				</table>
				<?php
					switch(@$_GET['e']) {
						case 1;
							echo "<h2>留言标题不能为空</h2>";
						break;
						
					}
				
				
				
				?>
			</form>
		</center>
	</body>
</html>