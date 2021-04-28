<?php
	include_once "comm.php";//引入公共方法集中的公共程序文件
	//增加订单
	function addIndent($userid,$commodity,$quantity,$consignee,$sex,$address,$postcode,$telephone,$email,$express,$orderdate,$buyer,$status,$total){
		$insertStr = "insert into jc_indent(userid,commodity,quantity,consignee,sex,address,postcode,telephone,email,express,orderdate,buyer,status,total) values('$userid','$commodity','$quantity','$consignee','$sex','$address','$postcode','$telephone','$email','$express','$orderdate','$buyer','$status','$total')"; //SQL语句
		$rs = execUpdate($insertStr);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	} 
	
	//修改订单
	function updateIndent($userid,$commodity,$quantity,$consignee,$sex,$address,$postcode,$telephone,$email,$express,$orderdate,$buyer,$status,$total,$orderid){
		$updateStr = "update jc_indent set userid='$userid',commodity='$commodity',quantity='$quantity',consignee='$consignee',sex='$sex',address='$address',postcode='$postcode',telephone='$telephone',email='$email',express='$express',orderdate='$orderdate',buyer='$buyer',status='$status',total='$total' where orderid='$orderid'";
		$rs = execUpdate($updateStr);//调用comm.php中的execUpdate函数
		//echo $updateStr;
		return $rs;//返回执行结果
	}
	
	//删除订单
	function deleteIndent($orderid){
		$deleteStr = "delete from jc_indent where orderid=$orderid";
		$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	}
	
	//查询订单
	function findIndentByUserId($userid){
		$strQuery = "select * from jc_indent where userid = $userid";
		$rs = execQuery($strQuery);//调用comm.php中的execUpdate函数
		if(count($rs)>0){ //判断查询是否成功	
			return $rs;
		}
		return $rs;//返回执行结果
	} 
	
	function findIndentByOrderId($orderid){
		$strQuery = "select * from jc_indent where orderid=$orderid";
		$rs = execQuery($strQuery);//调用comm.php中的execUpdate函数
		if(count($rs)>0){ //判断查询是否成功	
			return $rs[0];
		}
		return $rs;//返回执行结果
	} 
	
	
	function findIndentByOrderdate($orderdate){
		$strQuery = "select * from jc_indent where orderdate= '$orderdate'";
		$rs = execQuery($strQuery);//调用comm.php中的execUpdate函数
		if(count($rs)>0){ //判断查询是否成功	
			return $rs;
		}
		return $rs;//返回执行结果
	} 
	
	//查询所有订单
	function findAllIndent(){
		$strQuery = "select * from jc_indent";
		$rs = execQuery($strQuery);
		if(count($rs)>0){ //判断查询是否成功	
			return $rs;
		}
		return $rs;
	}
	
		//根据行列号查询订单
	function findIndentLimit($line,$row){
		$strQuery = "select * from jc_indent limit $line,$row";
		$rs = execQuery($strQuery);
		if(count($rs)>0){ //判断查询是否成功	
			return $rs;
		}
		return $rs;
	}
	
	//修改订单状态
	function updateIndentById($orderid,$status){
		$strQuery = "update jc_indent set status = '$status' where orderid = $orderid";
		$rs = execUpdate($strQuery);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	}
	
	
?>