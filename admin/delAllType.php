<?php
include "../include/jc_type.php";//�������ݿ���ʲ����
while(list($value,$name)=each($_POST)){  
	deleteType($value);//�������ݿ���ʲ㷽��
}
echo "<script>alert('Delete Success!');</script>";
echo "<script>location.href='showType.php';</script>";
?>