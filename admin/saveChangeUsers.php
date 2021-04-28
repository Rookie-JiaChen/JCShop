<?php 
include "../include/jc_user.php";
if(isset($_POST['ok'])){ // 根据提交按钮的 name 属性值判断是否体积成功

    $userid=$_GET["id"];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$telephone=$_POST['telephone'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$regdate=$_POST['regdate'];
	$flag=updateUser($userid,$username,$password,$email,$address,$telephone,$regdate);
	if($flag==1){
			echo "<script>alert('Modify Success!');</script>";
			echo "<script>location.href='showUsers.php';</script>";
		}else{
			echo "<script>alert('Modify Failed!');</script>";
			echo "<script>location.href='showUsers.php';</script>";
			}
	}
	?>