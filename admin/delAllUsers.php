<?php
include "../include/jc_user.php";//�������ݿ���ʲ����
while(list($value,$name)=each($_POST)){
	deleteUser($value);//�������ݿ���ʲ㷽��
}
echo "<script>alert('Delete Success!');</script>";
echo "<script>location.href='showUsers.php';</script>";
?>