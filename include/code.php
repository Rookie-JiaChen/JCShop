<?php
session_start();   //启动session
/*  生成一个4位随机数  */
$str="abcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<4;$i++){
	$num.=substr($str,rand(0,29),1);
}
$_SESSION['identifying']=$num;   //将随机数保存到session中
$img=imagecreate(100,40);    //创建一个100*40的图像
$white=ImageColorAllocate($img,255,255,255);  //设置图像的背景色为白色
$blue=ImageColorAllocate($img,64,142,212);   //设置图像中文本颜色为蓝色
/*  将多个颜色不同的*号添加到图像中  */
for($i=1;$i<200;$i++){
	$x=rand(1,100-9);
	$y=rand(1,40-6);
	$color=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	imagechar($img,1,$x,$y,"*",$color);
}
/*  将4位随机数添加到图像中，添加的位置不固定  */
$strx=rand(8,10);
$strpos=rand(20,25);
$font = 'C:/Windows/Fonts/Arial.ttf';
imagettftext($img,20,0,$strx,$strpos,$blue,$font,$num);

header ("Content-type: image/jpg");  //设置输出图像的格式
ob_clean();//关键代码，防止出现'图像因其本身有错无法显示'的问题
imagegif($img);   //输出图像
?>
