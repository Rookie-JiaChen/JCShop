<?php
	session_start();
	include "include/jc_user.php";
	if(isset($_POST['registering']))
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);//md5����
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$coded = $_POST['code'];
			$regdate = date('Y-m-d',time());//��ȡ��ǰʱ��
			$rs = findUserByUserName($username);
					
					if(!empty($rs)){  //�ж��û��Ƿ����
						echo "<script>alert('The Username already exists��Please rewrite it!')</script>";
						echo "<script>location='register.php'</script>";
					}else{
						//�����֤��
							if($_SESSION["identifying"] == $coded){
									$sql = addUser($username,$password,$email,$address,$telephone,$regdate);//���ú����������û�																
									if($sql == 1){
										echo "<script>alert('Register Success!')</script>";
										echo "<script>location='index.php'</script>";
									}else{
										echo "<script>alert('Register Failed��Please rewrite it!')</script>";
										echo "<script>location='register.php'</script>";
									}
								}else{
								echo "<script>alert('Verification Code Error!')</script>";
								echo "<script>location='register.php'</script>";
							}
						}
			
		}
?>