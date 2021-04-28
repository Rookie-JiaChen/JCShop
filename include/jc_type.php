<?php
include_once "comm.php";//引入公共方法集中的公共程序文件
/*
	查询所有商品类型信息
*/
function findAll(){
		$strQuery = "select * from jc_type order by typeid asc"; //查询语句
		$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
		if(count($rs)>0){ //判断查询是否成功
			return $rs;
		}
	return $rs;
	}
/*
	根据产品类型（id）查询产品信息
*/
	function findTypeByTypeid($typeid){
		$strQuery = "select * from jc_type where typeid = $typeid"; //查询语句
		$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
		if(count($rs)>0){ //判断查询是否成功
			return $rs[0];
		}
	return $rs;
	}
/*
	新增产品类型
*/
	function addTypes($typename,$typedes){ 
		//参数为对应数据库表的字段，其中typeid不需要手动增加，因为它是自增的
		$insertStr = "insert into jc_type(typename,typedes) values('$typename','$typedes')"; //SQL语句
		$rs = execUpdate($insertStr);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	}
/*
* 修改产品类型
*/
	
	function updateType($typeid,$typename,$typedes){ //参数为对应数据库表的字段
			$updateStr = "update jc_type set typename = '$typename',typedes = '$typedes' where typeid = $typeid"; //SQL语句
			$rs = execUpdate($updateStr);//调用comm.php中的execUpdate函数
			return $rs;//返回执行结果
		}
/*
* 删除类型
*/
	function deleteType($typeid){ //根据类型编号删除类型
		$deleteStr = "delete from jc_type where typeid = $typeid";
		$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
		return $rs;//返回执行结果
	}
	/*
	* 管理方法
	*/
	function findTypeByTypeName($typename){
		$strQuery = "select * from jc_type where typename = '$typename'"; //查询语句
		$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
		if(count($rs)>0){ //判断查询是否成功
			return $rs[0];
		}
		return $rs;
	}
	function findType(){
		$strQuery = "select * from jc_type order by typeid"; //查询语句
		$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
		if(count($rs)>0){ //判断查询是否成功
			return $rs;
		}
		return $rs;
	}
	
	function findTypeLimit($line,$row){
		$strQuery = "select * from jc_type limit $line,$row"; //查询语句
		$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
		if(count($rs)>0){ //判断查询是否成功
		
			return $rs;
		}
		return $rs;
	}
?>