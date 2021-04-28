<?php
			header("content-type:text/html;charset=utf-8");
			session_start();
			include "include/jc_user.php";
			if(isset($_POST['logining'])){
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				//½øÐÐÅÐ¶Ï
				$rs=findUser($username,$password);
				if(!empty($rs)){
					$_SESSION['username']=$username;
					$_SESSION['islogin']=1;
					$_SESSION['userid']=$rs['userid'];
					echo "<script>location.href='index.php';</script>";
				}else{
					echo "<script>alert('Username or Password Wrong!');</script>";
					echo "<script>location.href='login.php';</script>";
				}
			}
		?>
