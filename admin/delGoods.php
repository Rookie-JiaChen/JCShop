<?php
include "../include/jc_goods.php";//�������ݿ���ʲ����
$id=$_GET['id'];//��ȡ����������id
$delete = deleteGoods($id);//�������ݿ���ʲ㷽��
if($delete==1){//����1���ʾɾ���ɹ�
	echo "<script>alert('Delete Goods Success!');</script>";
	echo "<script>location.href='showGoods.php';</script>";
}else{
	echo "<script>alert('Delete Goods Failed!');</script>";
	echo "<script>location.href='showGoods.php';</script>";
}
?>