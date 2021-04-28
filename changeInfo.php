<?php
			header("content-type:text/html;charset=utf-8");
			session_start();
			include "include/jc_user.php";
			$userid=$_SESSION['userid'];
			if(isset($_POST['changingPwd'])){
				$newpwd=md5($_POST['newpwd']);
				$oldpwd=md5($_POST['oldpwd']);
				$rs=findUserByUserid($userid);
				
				if(strcmp($rs['password'],$oldpwd)==0){  //ÅÐ¶Ï¾ÉÃÜÂëÊÇ·ñÊäÈëÕýÈ·
					updateUserPwd($userid,$newpwd);
					echo "<script>alert('Password Change Success!');</script>";
					echo "<script>location.href='my-account.php';</script>";
				}else{
					echo "<script>alert('Old Password Wrong!');</script>"; 
					echo "<script>location.href='my-account.php';</script>";
				}
				
			}
			
			if(isset($_POST['changingTel'])){
				$telephone=$_POST['newtel'];
				updateUserTel($userid,$telephone);
				echo "<script>alert('Telephone Change Success!');</script>";
				echo "<script>location.href='my-account.php';</script>";
			}
			
			if(isset($_POST['changingEmail'])){
				$email=$_POST['newemail'];
				updateUserEmail($userid,$email);
				echo "<script>alert('Email Change Success!');</script>";
				echo "<script>location.href='my-account.php';</script>";
			}
			
		?>
