<?php
include "include/jc_user.php";
session_start();
if(isset($_POST['ok'])){
	$username=$_POST['username'];
	$rs=findUserByUserName($username);
	if(!empty($rs)){
		$_SESSION['username']=$username;
		$_SESSION['email']=$rs['email'];
		$_SESSION['userid']=$rs['userid'];
		echo "<script>location.href='findPwd.php';</script>";
	}else{
		echo "<script>alert('User non-existent!');</script>";
		echo "<script>location.href='forgetPwd.php';</script>";
	}
	
}

if(isset($_POST['checkcode'])){
	$code=$_POST['code'];
	
	if($_SESSION['code']==$code){//判断是否输入正确的验证码
		$_SESSION['isCheck']=1; //添加判断是否通过验证
		echo "<script>location.href='changePwd.php';</script>";
	}else{
		echo "<script>alert('Verification Code Error!');</script>";
		echo "<script>location.href='findPwd.php';</script>";
	}
	
}


if(isset($_POST['changepwd'])){
	$newpwd=md5($_POST['newpwd']);
	$userid=$_SESSION['userid'];
	$rs=updateUserPwd($userid,$newpwd);
	if ($rs==1){
		//销毁Session
		if(isset($_SESSION['username'])){
			unset($_SESSION['username']);	
		}
		if(isset($_SESSION['email'])){
			unset($_SESSION['email']);	
		}
		if(isset($_SESSION['userid'])){
			unset($_SESSION['userid']);	
		}
		if(isset($_SESSION['code'])){
			unset($_SESSION['code']);	
		}
		if(isset($_SESSION['isCheck'])){
			unset($_SESSION['isCheck']);	
		}
		
		echo "<script>alert('Password change successfully!');</script>";
		echo "<script>location.href='login.php';</script>";
	}else{
		echo "<script>alert('Password change failed,Please don't use previous password!);</script>";
		echo "<script>location.href='changePwd.php';</script>";
	}
	
	
	
}

?>