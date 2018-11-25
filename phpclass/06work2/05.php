<?php
//多维数组
	$arr = [
			['姓名' => '大小姐', '性别' => '女' ,'身高' => '160CM', '喜好' => '男'],
			['姓名' => 'coco', '性别' => '女' ,'身高' => '162CM', '喜好' => '男'],
			['姓名' => '典韦', '性别' => '男' ,'身高' => '150CM', '喜好' => '女'],

		];
		echo "<hr>";
		echo "<table width='500' border='1'>";
		echo "<tr>";
			echo "<th>姓名</th>";
			echo "<th>性别</th>";
			echo "<th>身高</th>";
			echo "<th>喜好</th>";
		echo "</tr>";
		//使用循环把$arr 数组遍历
		foreach($arr as $key => $value) {
			echo "<tr align='center'>";
			echo "<td>".$value['姓名']."</td>";
			echo "<td>".$value['性别']."</td>";
			echo "<td>".$value['身高']."</td>";
			echo "<td>".$value['喜好']."</td>";
			echo "</tr>";
		}
	echo "</table>";