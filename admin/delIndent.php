<?php
include "../include/jc_indent.php";//引入数据库访问层方法
$id=$_GET['id'];

$tj=deleteIndent($id);//调用数据库访问层方法
if($tj==1){		//返回1则表明删除成功
	echo "<script>alert('Delete Success!');</script>";
	echo "<script>location.href='showIndent.php';</script>";
}else{
	echo "<script>alert('Delete Failed!');</script>";
	echo "<script>location.href='showIndent.php';</script>";
 }
?>
