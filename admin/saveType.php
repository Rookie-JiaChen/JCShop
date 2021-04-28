<?php 
include "../include/jc_type.php";//引入数据库访问层代码
$typename=$_POST['typename'];
$typedes=$_POST['typedes'];

$rs=findTypeByTypeName($typename);//调用数据库访问层方法
if(!empty($rs)){//判断返回值是否为空
	echo "<script>alert('This type has existed!');</script>";
	echo "<script>location.href='addType.php';</script>";
}else{
	
	$insert = addTypes($typename,$typedes);//调用数据库访问层方法
	if($insert==1){//如果返回值为1则添加成功
		echo "<script>alert('Add Success!');</script>";
		echo "<script>location.href='showType.php';</script>";
	}else{
		echo "<script>alert('Add Failed!');</script>";
		echo "<script>location.href=addType.php';</script>";
	}
 }
?>