<?php
	$arr = [
			  ['姓名' => 'zero','性别'=>'男','身高'=>'180cm','年龄'=>'21'],
			  ['姓名' => 'zone','性别'=>'男','身高'=>'180cm','年龄'=>'21'],
			  ['姓名' => 'marry','性别'=>'女','身高'=>'160cm','年龄'=>'21'],
			  ['姓名' => 'kuuma','性别'=>'男','身高'=>'210cm','年龄'=>'21']
		   ];
		   echo"<pre>";
		   echo"<table width='500' border='1'>";
				echo"<tr>";
					echo"<th>姓名</th>";
					echo"<th>性别</th>";
					echo"<th>身高</th>";
					echo"<th>年龄</th>";
				echo"</tr>";
				//使用循环把整个数组遍历
				foreach($arr as $key=>$value){
					echo "<tr align='center'>";
					echo "<td>".$value['姓名']."</td>";
					echo "<td>".$value['性别']."</td>";
					echo "<td>".$value['身高']."</td>";
					echo "<td>".$value['年龄']."</td>";
					echo "</tr>";
				}
		   echo"</table>";
		   
?>