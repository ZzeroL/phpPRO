<?php
	header("Content-type:image/jpg");
	//设置画布
	$img = imagecreatetruecolor(500,500);
	//定义颜色
	$black = imagecolorallocate($img,0,0,0);
	$green = imagecolorallocate($img,31,249,13);
	$red = imagecolorallocate($img,255,4,4);
	$white = imagecolorallocate($img,255,255,255);
	$blue = imagecolorallocate($img,94,210,207);
	$yellow = imagecolorallocate($img,234,228,11);
	$pink = imagecolorallocate($img,239,120,153);
	//给画布填充颜色
	imagefill($img,0,0,$green);
	
	//画一个点
	//imagesetpixel($img,50,50,$red);
	
	//画一个矩形
	//imagefilledrectangle($img,100,100,200,200,$red);
	imagefilledarc($img,240,240,200,200,90,270,$black,IMG_ARC_PIE);
	imagefilledarc($img,240,240,200,200,270,450,$white,IMG_ARC_PIE);
	imagefilledarc($img,240,190,100,100,0,360,$black,IMG_ARC_PIE);
	imagefilledarc($img,240,290,100,100,0,360,$white,IMG_ARC_PIE);
	imagefilledarc($img,240,180,30,30,0,360,$white,IMG_ARC_PIE);
	imagefilledarc($img,240,300,30,30,0,360,$black,IMG_ARC_PIE);
	//输出图像到浏览器
	imagejpeg($img);