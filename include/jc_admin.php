<?php
include_once "comm.php" ;//引入公共方法集中的公共程序文件

/*
* 根据用户用户名和密码查询用户信息
*/

function findAdmin($adminname,$adminpassword){
	$strQuery = "select * from jc_admin where admin_name = '$adminname' and admin_password = '$adminpassword' "; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
		return $rs[0];
	}
	return $rs;
}

function findAllAdmin(){
	$strQuery = "select * from jc_admin "; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
		return $rs;
	}
	return $rs;
}

function findAdminLimit($line,$row){
	$strQuery = "select * from jc_admin limit $line,$row"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}

/*
* 根据用户id号（id）查询用户信息
*/

function findAdminById($id){
	$strQuery = "select * from jc_admin where admin_id = $id"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}

/**
* 新增用户
*/
function addAdmin($name,$password){ //参数为对应数据库表的字段，其中id不需要手动增加，因为它是自增的
	$insertStr = "insert into jc_admin(admin_name,admin_password) values('$name',$password)"; //SQL语句
	$rs = execUpdate($insertStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 修改用户
*/
function updateAdmin($admin_id,$admin_name,$password){ //参数为对应数据库表的字段
	$updateStr = "update jc_admin set admin_name='$admin_name',admin_password = '$password' where admin_id = $admin_id"; //SQL语句
	$rs = execUpdate($updateStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 删除用户
*/
function deleteAdmin($id){ //根据用户id号删除用户
	$deleteStr = "delete from jc_admin where admin_id = $id";
	$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
?>
