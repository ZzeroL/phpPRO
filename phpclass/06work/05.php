<?php
//��ά����
	$arr = [
			['����' => '��С��', '�Ա�' => 'Ů' ,'���' => '160CM', '����' => '18'],
			['����' => 'coco', '�Ա�' => 'Ů' ,'���' => '162CM', '����' => '����'],
			['����' => '��Τ', '�Ա�' => '��' ,'���' => '150CM', '����' => '����'],

		];
		echo "<hr>";
		echo "<table width='500' border='1'>";
		echo "<tr>";
			echo "<th>����</th>";
			echo "<th>�Ա�</th>";
			echo "<th>���</th>";
			echo "<th>����</th>";
		echo "</tr>";
		//ʹ��ѭ����$arr �������
		foreach($arr as $key => $value) {
			echo "<tr align='center'>";
			echo "<td>".$value['����']."</td>";
			echo "<td>".$value['�Ա�']."</td>";
			echo "<td>".$value['���']."</td>";
			echo "<td>".$value['����']."</td>";
			echo "</tr>";
		}
	echo "</table>";