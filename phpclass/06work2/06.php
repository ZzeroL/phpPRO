<?php
	//����ַ�������
	$str= 'abc#abc#abc';
	
	$result = explode('#',$str);
	
	var_dump ($result);
	
	
	echo "<hr>";
	
	//��ϳ��ַ�������
	
	$arr = [a,b,c,d,e,f,g];
	
	$result = implode('@',$arr);
	
	var_dump ($result);
	
	//ȥ�����߶�����ַ�  ltrim��� rtrim�ұ�
	
	$str = ' 123 ';
	echo "#".$str."#";
	$result = ltrim($str,' ');
	echo "#".$result."#";