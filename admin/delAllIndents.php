<?php
include "../include/jc_indent.php";//�������ݿ���ʲ����
while(list($value,$name)=each($_POST)){  
	deleteIndent($value);//�������ݿ���ʲ㷽��
}
echo "<script>alert('Delete Success!');</script>";
echo "<script>location.href='showIndent.php';</script>";
?>