<?php
	//����ַ�������
	$str= 'aa#bb#cc';
	
	$result = explode('#',$str);
	
	var_dump ($result);
	
	
	echo "<hr>";
	
	//��ϳ��ַ�������
	
	$arr = [1,2,3,4,5,6];
	
	$result = implode('@',$arr);
	
	var_dump ($result);
	
	//ȥ�����߶�����ַ�  ltrim��� rtrim�ұ�
	
	$str = ' abc ';
	echo "#".$str."#";
	$result = ltrim($str,' ');
	echo "#".$result."#";