<?php
session_start();   //����session
/*  ����һ��4λ�����  */
$str="abcdefghijklmnopqrstuvwxyz0123456789";
for($i=0;$i<4;$i++){
	$num.=substr($str,rand(0,29),1);
}
$_SESSION['identifying']=$num;   //����������浽session��
$img=imagecreate(100,40);    //����һ��100*40��ͼ��
$white=ImageColorAllocate($img,255,255,255);  //����ͼ��ı���ɫΪ��ɫ
$blue=ImageColorAllocate($img,64,142,212);   //����ͼ�����ı���ɫΪ��ɫ
/*  �������ɫ��ͬ��*����ӵ�ͼ����  */
for($i=1;$i<200;$i++){
	$x=rand(1,100-9);
	$y=rand(1,40-6);
	$color=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	imagechar($img,1,$x,$y,"*",$color);
}
/*  ��4λ�������ӵ�ͼ���У���ӵ�λ�ò��̶�  */
$strx=rand(8,10);
$strpos=rand(20,25);
$font = 'C:/Windows/Fonts/Arial.ttf';
imagettftext($img,20,0,$strx,$strpos,$blue,$font,$num);

header ("Content-type: image/jpg");  //�������ͼ��ĸ�ʽ
ob_clean();//�ؼ����룬��ֹ����'ͼ�����䱾���д��޷���ʾ'������
imagegif($img);   //���ͼ��
?>
