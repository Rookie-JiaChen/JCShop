<?php
include "../include/jc_goods.php";//�������ݿ���ʲ����
while(list($value,$name)=each($_POST)){
	deleteGoods($value);//�������ݿ���ʲ㷽��
}
echo "<script>alert('Delete Success!');</script>";
echo "<script>location.href='showGoods.php';</script>";
?>