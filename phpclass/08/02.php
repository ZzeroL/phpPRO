<?php
	header("Content-type:image/jpg");
	//设置画布
	$img = imagecreatetruecolor(500,500);
	//定义颜色
	$green = imagecolorallocate($img,31,249,13);
	$red = imagecolorallocate($img,255,4,4);
	$sred = imagecolorallocate($img,255,49,54);
	$white = imagecolorallocate($img,255,255,255);
	$blue = imagecolorallocate($img,94,210,207);
	$yellow = imagecolorallocate($img,234,228,11);
	$syellow = imagecolorallocate($img,217,217,0);
	$pink = imagecolorallocate($img,239,120,153);
	//给画布填充颜色
	imagefill($img,0,0,$white);
	
	//画一个点
	//imagesetpixel($img,50,50,$red);
	
	//画一个矩形
	//imagefilledrectangle($img,100,100,200,200,$red);
	for($i=280;$i>=250;$i--){
	//imagearc($img,250,$i,250,200,0,360,$blue);
	imagefilledarc($img,250,$i,250,200,-150,-90,$green,IMG_ARC_PIE);
	imagefilledarc($img,250,$i,250,200,-90,100,$syellow,IMG_ARC_PIE);
	imagefilledarc($img,250,$i,250,200,100,210,$red,IMG_ARC_PIE);
	}
	imagefilledarc($img,250,249,250,200,-90,100,$yellow,IMG_ARC_PIE);
	imagefilledarc($img,250,249,250,200,100,210,$sred,IMG_ARC_PIE);
	
	//imagefilledarc($img,250,250,200,200,100,200,$pink,IMG_ARC_PIE);
	//输出文字
	imagettftext($img,10,0,340,250,$green,"./SIMYOU.TTF","65%");
	imagettftext($img,10,0,150,280,$green,"./SIMYOU.TTF","25%");
	imagettftext($img,10,0,200,180,$red,"./SIMYOU.TTF","10%");
	//输出图像到浏览器
	imagejpeg($img);