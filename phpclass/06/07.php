<?php
	$arr = [
			  ['����' => 'zero','�Ա�'=>'��','���'=>'180cm','����'=>'21'],
			  ['����' => 'zone','�Ա�'=>'��','���'=>'180cm','����'=>'21'],
			  ['����' => 'marry','�Ա�'=>'Ů','���'=>'160cm','����'=>'21'],
			  ['����' => 'kuuma','�Ա�'=>'��','���'=>'210cm','����'=>'21']
		   ];
		   echo"<pre>";
		   echo"<table width='500' border='1'>";
				echo"<tr>";
					echo"<th>����</th>";
					echo"<th>�Ա�</th>";
					echo"<th>���</th>";
					echo"<th>����</th>";
				echo"</tr>";
				//ʹ��ѭ���������������
				foreach($arr as $key=>$value){
					echo "<tr align='center'>";
					echo "<td>".$value['����']."</td>";
					echo "<td>".$value['�Ա�']."</td>";
					echo "<td>".$value['���']."</td>";
					echo "<td>".$value['����']."</td>";
					echo "</tr>";
				}
		   echo"</table>";
		   
?>