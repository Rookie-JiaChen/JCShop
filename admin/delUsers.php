<?php
include "../include/jc_user.php";//�������ݿ���ʲ㷽��
$id=$_GET['id'];
$tj=deleteUser($id);//�������ݿ���ʲ㷽��
if($tj==1){		//����1�����ɾ���ɹ�
	echo "<script>alert('Delete Success!');</script>";
	echo "<script>location.href='showUsers.php';</script>";
}else{
	echo "<script>alert('Delete Failed!');</script>";
	echo "<script>location.href='showUsers.php';</script>";
 }
?>
