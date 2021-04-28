<?php
session_start();  //开启Session
if($_GET['id']==1){
	$_SESSION=array();   //删除所有session变量
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-3600, '/');   //删除包含SessionID的Cookie
	}
	session_destroy();     //最后彻底销毁Session
	echo "<script>location.href='index.php';</script>";
}
?>