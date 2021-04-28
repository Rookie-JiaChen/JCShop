<?php
include "../include/jc_type.php";//引入数据库访问层方法
$id=$_GET['id'];

$tj=deleteType($id);//调用数据库访问层方法
if($tj==1){		//返回1则表明删除成功
	echo "<script>alert('Delete Success!');</script>";
	echo "<script>location.href='showType.php';</script>";
}else{
	echo "<script>alert('Delete Failed!');</script>";
	echo "<script>location.href='showType.php';</script>";
 }
?>
