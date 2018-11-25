<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>活动板</title>
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
		<center>
			
				<form action="doadd.php" method="post" enctype="multipart/form-data">
					<div>
						<table width="800" >
							<tr>
								<td colspan="2"  class="biaoti"><h2 align="center">活动发布</h2></td>
							</tr>
							<tr>
								<td align="right">活动名称：</td>
								<td><input type="text" name="actname"></td>
							</tr>
							<tr>
								<td align="right">活动简介：</td>
								<td><textarea rows="10" cols="70" name="summary"></textarea></td>
							</tr>
							<tr>
								<td align="right">活动目的：</td>
								<td><textarea rows="10" cols="70" name="plan"></textarea></td>
							</tr>
							<tr>
								<td align="right">活动内容：</td>
								<td><textarea rows="10" cols="70" name="content"></textarea></td>
							</tr>
							<tr>
								<td align="right">活动规则：</td>
								<td><textarea rows="2" cols="70" name="rule"></textarea></td>
							</tr>
							<tr>
								<td align="right">活动流程：</td>
								<td><textarea rows="10" cols="70" name="turn"></textarea></td>
							</tr>
							<tr>```
								<td align="right">活动留影：</td>
								<td><input type="file" name="picture"></td>
							</tr>
							<tr>
								<td align="right">出席人员：</td>
								<td><input type="text" name="people"></td>
							</tr>
						</table>
					</div>
					<div>
							<input type="submit" value="发布活动">
						</div>
				</form>
		</center>
	</body>
</html>