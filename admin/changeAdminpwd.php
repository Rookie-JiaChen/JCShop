<?php
include_once "../include/jc_admin.php";
session_start();
if(isset($_POST['ok'])){
	$admin_id=$_SESSION['admin_id'];
	$admin_name=$_SESSION['admin_name'];
	$oldpwd=md5($_POST['oldpwd']);
	$newpwd=md5($_POST['newpwd']);
	
	$admininfo=findAdminById($admin_id);

	if(strcmp($oldpwd,$admininfo['admin_password'])==0){
		$rs=updateAdmin($admin_id,$admin_name,$newpwd);
		
		if($rs==1){
			echo "<script>alert('Update Password Success!');</script>";
			echo "<script>location.href='adminInfo.php';</script>";
		}
		
	}else{
		echo "<script>alert('Old Password Wrong!');</script>";
		echo "<script>location.href='adminInfo.php';</script>";
	}
}

?>