<?php
	//�ַ������Ϊ����
	$str='AA@BB@CC@DD';
	
	$result = explode('@',$str);
	
	var_dump($result);
	
	echo"<hr>";
	
	//��������ϳ��ַ���
	
	$arr = [10,20,30,40];
	
	$result = implode($arr,'#');
	
	var_dump($result);
	
	echo"<hr>";
	
	//ȥ�����Ҷ�����ַ�
	
	$str = ' ABC ';
	echo"#".$str."#";
	$result = trim($str,' ');
	echo"#".$result."#";
?>