<?php
/*
* 公共方法集
*/

function get_Connect(){
	$url="127.0.0.1";
	$username="root";
	$database="jc_shop";
	$connection = mysqli_connect($url,$username,"") or die (header("location: ./error.php?msg=数据库服务器参数错误"));
	$db = mysqli_select_db($connection,$database) or die (header("http://localhost:88/JCShop/error.php?msg=数据库名不正确"));
	mysqli_query($connection,"set names utf8");
	return $connection;
}
/**
* 执行查询操作
*/
function execQuery($strQuery){
	$results = array();
	$connection = get_Connect();
	$rs = mysqli_query($connection,$strQuery) or  die("查询失败");// die (header("http://localhost:80/JCShop/error.php?msg=查询失败"));
	for($i=0;$i<mysqli_num_rows($rs);$i++){
		$results[$i] = mysqli_fetch_assoc($rs);//读取一条记录
	}
	mysqli_free_result($rs);//释放结果集
	mysqli_close($connection);//关闭连接
	return $results;//返回查询结果
}
/**
* 对数据表记录执行修改、删除和插入操作 header("location: ./error.php?msg=数据表操作失败")
* @param <type> $strUpdate  sql语句
*/
function execUpdate($strUpdate){
	$connection = get_Connect();
	//执行SQL语句
	$rs = mysqli_query($connection,$strUpdate) or die (header("http://localhost:88/JCShop/error.php?msg=数据表操作失败"));
	$result = mysqli_affected_rows($connection);
	mysqli_close($connection);
	return $result;
}
?>