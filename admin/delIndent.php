<?php
include "../include/jc_indent.php";//�������ݿ���ʲ㷽��
$id=$_GET['id'];

$tj=deleteIndent($id);//�������ݿ���ʲ㷽��
if($tj==1){		//����1�����ɾ���ɹ�
	echo "<script>alert('Delete Success!');</script>";
	echo "<script>location.href='showIndent.php';</script>";
}else{
	echo "<script>alert('Delete Failed!');</script>";
	echo "<script>location.href='showIndent.php';</script>";
 }
?>
