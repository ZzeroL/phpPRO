<?php
//��ά����
	$arr = [
			['����' => '��С��', '�Ա�' => 'Ů' ,'���' => '160CM', 'ϲ��' => '��'],
			['����' => 'coco', '�Ա�' => 'Ů' ,'���' => '162CM', 'ϲ��' => '��'],
			['����' => '��Τ', '�Ա�' => '��' ,'���' => '150CM', 'ϲ��' => 'Ů'],

		];
		echo "<hr>";
		echo "<table width='500' border='1'>";
		echo "<tr>";
			echo "<th>����</th>";
			echo "<th>�Ա�</th>";
			echo "<th>���</th>";
			echo "<th>ϲ��</th>";
		echo "</tr>";
		//ʹ��ѭ����$arr �������
		foreach($arr as $key => $value) {
			echo "<tr align='center'>";
			echo "<td>".$value['����']."</td>";
			echo "<td>".$value['�Ա�']."</td>";
			echo "<td>".$value['���']."</td>";
			echo "<td>".$value['ϲ��']."</td>";
			echo "</tr>";
		}
	echo "</table>";