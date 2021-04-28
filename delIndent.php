<?php
include "include/jc_indent.php";
$orderid=$_GET['orderid'];
$tj=deleteIndent($orderid);
if($tj==1){
	echo "<script>alert('Cancel Order Success!');</script>";
	echo "<script>location.href='myIndent.php';</script>";
}else{
	echo "<script>alert('Cancel Order Failed!');</script>";
	echo "<script>location.href='myIndent.php';</script>";
 }
?>