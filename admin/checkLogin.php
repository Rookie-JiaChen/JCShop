<?php
session_start();
include "../include/jc_admin.php";
if(isset($_POST['ok'])){
	$adminname=$_POST['adminname'];
	$adminpassword=md5($_POST['adminpassword']);
	$query = findAdmin($adminname,$adminpassword);
	if(!empty($query)){
		$_SESSION['admin_name']=$adminname;
		$_SESSION['admin_id'] = $query['admin_id'];
		$_SESSION['adminflag']=1;
		echo "<script>location.href='home.php';</script>";
	}else{
		echo "<script>alert('用户名或密码错误');</script>";
		echo "<script>location.href='index.php';</script>";
	}
	
}
?>