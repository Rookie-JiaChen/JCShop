<?php
/*
* ����������
*/

function get_Connect(){
	$url="127.0.0.1";
	$username="root";
	$database="jc_shop";
	$connection = mysqli_connect($url,$username,"") or die (header("location: ./error.php?msg=���ݿ��������������"));
	$db = mysqli_select_db($connection,$database) or die (header("http://localhost:88/JCShop/error.php?msg=���ݿ�������ȷ"));
	mysqli_query($connection,"set names utf8");
	return $connection;
}
/**
* ִ�в�ѯ����
*/
function execQuery($strQuery){
	$results = array();
	$connection = get_Connect();
	$rs = mysqli_query($connection,$strQuery) or  die("��ѯʧ��");// die (header("http://localhost:80/JCShop/error.php?msg=��ѯʧ��"));
	for($i=0;$i<mysqli_num_rows($rs);$i++){
		$results[$i] = mysqli_fetch_assoc($rs);//��ȡһ����¼
	}
	mysqli_free_result($rs);//�ͷŽ����
	mysqli_close($connection);//�ر�����
	return $results;//���ز�ѯ���
}
/**
* �����ݱ��¼ִ���޸ġ�ɾ���Ͳ������ header("location: ./error.php?msg=���ݱ����ʧ��")
* @param <type> $strUpdate  sql���
*/
function execUpdate($strUpdate){
	$connection = get_Connect();
	//ִ��SQL���
	$rs = mysqli_query($connection,$strUpdate) or die (header("http://localhost:88/JCShop/error.php?msg=���ݱ����ʧ��"));
	$result = mysqli_affected_rows($connection);
	mysqli_close($connection);
	return $result;
}
?>