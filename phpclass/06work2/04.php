<?php

	//�������� ���鲻����echo���
	$a=[a,b,c,d,e,f];
	var_dump ($a);
	
	echo "<hr>";
	//ָ��Ԫ�ص�λ��
	$b=[a,b,c,d,6=>e];
	var_dump($b);
	
	echo "<hr>";
	//ȡԪ��
	$c=[a,b,c,d,e,f];
	echo $c[5];
	
	echo "<hr>";
	//��������
	$d = [a,b,c,d,e,f,g,h,j];
	//��������
	foreach($d as $key=>$value){
		echo $value;
	}
	
	echo "<hr>";
	
	
?>