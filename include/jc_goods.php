<?php
include_once "comm.php";//引入公共方法集中的公共程序文件

/**
* 根据商品名查询商品信息
*/
function findGoodsByGoodsName($goodsname){
	$strQuery = "select * from jc_goods where goodsname = '$goodsname'"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}



function findNewsGoods(){
	$strQuery="select * from jc_goods where newgoods=1 order by goodsid desc";
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}

function findNews($row,$count){
	$strQuery = "select * from jc_goods  where newgoods=1 order by goodsid desc  limit $row,$count"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}

/*查询推荐商品
$row：开始行
$count:返回行数
返回值：返回结果集
*/
function findRe($row,$count){
	$strQuery = "select * from jc_goods where recommend=1 order by goodsid desc limit $row,$count"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 根据商品编号（typeid）查询商品信息
*/

function findGoodsByTypeId($typeId){
	$strQuery = "select * from jc_goods where typeid = $typeId"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 根据商品编号（typeid）分页查询商品信息
*/

function findGoodsByType($typeId,$row,$count){
	$strQuery = "select * from jc_goods where typeid = $typeId   limit $row,$count"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 根据商品编号（goodsid）查询商品信息
*/

function findGoodsByGoodsId($goodsId){
	$strQuery = "select * from jc_goods where goodsid = $goodsId"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs[0];
	}
	return $rs;
}
/*
* 根据商品名称模糊（goodsname）查询商品信息
*/

function findGoodsByName($Name){
	$strQuery = "select * from jc_goods where goodsname like '%$Name%'"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/*
* 根据商品名称模糊（goodsname）查询分页商品信息
*/

function findGoodsByNamelist($Name,$row,$count){
	$strQuery = "select * from jc_goods where goodsname like '%$Name%' limit $row,$count"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}
/**
* 根据是否推荐（recommend）查询商品信息
*/
function findGoodsByRecommend($recommend){
	$strQuery = "select * from jc_goods where recommend = $recommend"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
		return $rs;
	}
	return $rs;
}
/**
* 根据是否推荐（recommend）分页查询商品信息
*/
function findGoodsByReList($row,$count){
	$strQuery ="select * from jc_goods where recommend=1 order by goodsid desc limit $row,$count"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
		return $rs;
	}
	return $rs;
}
/**
* 新增商品
*/
function addGoods($typeid,$norms,$goodsname,$size,$installment,$prodate,$goodsprice,$discount,$photo,$introduction,$recommend,$newgoods){ //参数为对应数据库表的字段，其中goodsid不需要手动增加，因为它是自增的
	$insertStr = "insert into jc_goods(typeid,norms,goodsname,size,installment,prodate,goodsprice,discount,photo,introduction,recommend,newgoods) values ($typeid,$norms,'$goodsname','$size','$installment','$prodate','$goodsprice','$discount','$photo','$introduction',$recommend,$newgoods)"; //SQL语句
	$rs = execUpdate($insertStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 修改商品
*/
function updateGoods($goodsid,$typeid,$norms,$goodsname,$size,$installment,$prodate,$goodsprice,$discount,$photo,$introduction,$recommend,$newgoods){ //参数为对应数据库表的字段
	$updateStr = "update jc_goods set typeid = $typeid,norms = $norms,goodsname = '$goodsname',size = '$size',installment = '$installment',prodate = '$prodate',goodsprice = '$goodsprice',discount = '$discount',photo = '$photo',introduction = '$introduction',recommend = $recommend,newgoods = $newgoods where goodsid = $goodsid"; //SQL语句
	$rs = execUpdate($updateStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}
/*
* 删除商品
*/
function deleteGoods($goodsid){ //根据商品编号删除商品
	$deleteStr = "delete from jc_goods where goodsid = $goodsid";
	$rs = execUpdate($deleteStr);//调用comm.php中的execUpdate函数
	return $rs;//返回执行结果
}


/*
 * 后台管理方法
 * 
 */

function findAllGood(){
	$strQuery = "select * from jc_goods "; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}

/**
* 根据行号数和列号数名查询商品信息
*/
function findGoodsLimit($line,$row){
	$strQuery = "select * from jc_goods limit $line,$row"; //查询语句
	$rs = execQuery($strQuery);//调用comm.php中的execQuery函数
	if(count($rs)>0){ //判断查询是否成功
	
		return $rs;
	}
	return $rs;
}

?>
