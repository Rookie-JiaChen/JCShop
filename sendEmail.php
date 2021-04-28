<?php
// 引入类库文件
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
session_start();


function sendmail($email,$code){
	// 实例化PHPMailer核心类
	$mail = new PHPMailer();
	// 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可默认关闭debug调试模式
	$mail->SMTPDebug = 0;
	// 使用smtp鉴权方式发送邮件
	$mail->isSMTP();
	// smtp需要鉴权 这个必须是true
	$mail->SMTPAuth = true;
	// 链接邮箱的服务器地址
	$mail->Host = 'smtp.163.com';
	// 设置使用ssl加密方式登录鉴权
	$mail->SMTPSecure = 'ssl';
	// 设置ssl连接smtp服务器的远程服务器端口号
	$mail->Port = 465;
	// 设置发送的邮件的编码
	$mail->CharSet = 'UTF-8';
	// smtp登录的账号 邮箱即可
	$mail->Username = 'w791598204@163.com'; // 你的邮箱
	// smtp登录的密码 使用生成的授权码
	$mail->Password = 'NBZMEPSZRDWDHQPQ';
	// 设置发件人邮箱地址 同登录账号
	$mail->setFrom('w791598204@163.com', '嘉辰商城'); // 你的邮箱
	// 邮件正文是否为html编码 注意此处是一个方法
	$mail->isHTML(true);
	// 设置收件人邮箱地址；添加多个收件人 则多次调用方法即可
	$mail->addAddress($email);
	// 添加该邮件的主题
	$mail->Subject = '嘉辰商城验证码';
	// 添加邮件正文
	$mail->Body = "您好，您的验证码为：<h1>$code</h1>";
	
	if($mail->send()){
	        return true;
	    }else {
	        return false;
	    }
}


$code = rand(100000,999999);// 验证码
$_SESSION['code']=$code;
$email=$_SESSION['email'];
if(sendmail($email,$code)){
	echo "<script>alert('Email sent successfully!');</script>";
	echo "<script>location.href='findPwd.php';</script>";
}else{
	echo "<script>alert('Email sent failed!');</script>";
	echo "<script>location.href='findPwd.php';</script>";
}



?>