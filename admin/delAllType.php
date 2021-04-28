<?php
include "../include/jc_type.php";//引入数据库访问层代码
while(list($value,$name)=each($_POST)){  
	deleteType($value);//调用数据库访问层方法
}
echo "<script>alert('Delete Success!');</script>";
echo "<script>location.href='showType.php';</script>";
?>