<?php 
include "../include/jc_type.php";//�������ݿ���ʲ����
$typename=$_POST['typename'];
$typedes=$_POST['typedes'];

$rs=findTypeByTypeName($typename);//�������ݿ���ʲ㷽��
if(!empty($rs)){//�жϷ���ֵ�Ƿ�Ϊ��
	echo "<script>alert('This type has existed!');</script>";
	echo "<script>location.href='addType.php';</script>";
}else{
	
	$insert = addTypes($typename,$typedes);//�������ݿ���ʲ㷽��
	if($insert==1){//�������ֵΪ1����ӳɹ�
		echo "<script>alert('Add Success!');</script>";
		echo "<script>location.href='showType.php';</script>";
	}else{
		echo "<script>alert('Add Failed!');</script>";
		echo "<script>location.href=addType.php';</script>";
	}
 }
?>