<?php
include "../include/jc_goods.php";//引入数据库访问层代码
$id=$_GET['id'];//获取表单传过来的id
$delete = deleteGoods($id);//调用数据库访问层方法
if($delete==1){//返回1则表示删除成功
	echo "<script>alert('Delete Goods Success!');</script>";
	echo "<script>location.href='showGoods.php';</script>";
}else{
	echo "<script>alert('Delete Goods Failed!');</script>";
	echo "<script>location.href='showGoods.php';</script>";
}
?>