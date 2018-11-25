<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
			
				<form action="tianjialiuyan.php" method="post">
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
								<td><input type="text" name="author" value="<?php  echo $_SESSION['username'];?>"readonly></td>
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
					<?php
						
						switch(@$_GET['e']){
							case 1:
								echo"<h2>留言标题不能为空</h2>";
							break;
							//case 2:
								//echo"<h2>留言者不能为空</h2>";
							//break;
							case 3:
								echo"<h2>留言内容不能为空</h2>";
							break;
							default:
							 break;
						}
					?>
				</form>
		</center>
	</body>
</html>