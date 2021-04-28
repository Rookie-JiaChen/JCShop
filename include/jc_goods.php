<?php
include_once "comm.php";//���빫���������еĹ��������ļ�

/**
* ������Ʒ����ѯ��Ʒ��Ϣ
*/
function findGoodsByGoodsName($goodsname){
	$strQuery = "select * from jc_goods where goodsname = '$goodsname'"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}



function findNewsGoods(){
	$strQuery="select * from jc_goods where newgoods=1 order by goodsid desc";
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}

function findNews($row,$count){
	$strQuery = "select * from jc_goods  where newgoods=1 order by goodsid desc  limit $row,$count"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}

/*��ѯ�Ƽ���Ʒ
$row����ʼ��
$count:��������
����ֵ�����ؽ����
*/
function findRe($row,$count){
	$strQuery = "select * from jc_goods where recommend=1 order by goodsid desc limit $row,$count"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* ������Ʒ��ţ�typeid����ѯ��Ʒ��Ϣ
*/

function findGoodsByTypeId($typeId){
	$strQuery = "select * from jc_goods where typeid = $typeId"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* ������Ʒ��ţ�typeid����ҳ��ѯ��Ʒ��Ϣ
*/

function findGoodsByType($typeId,$row,$count){
	$strQuery = "select * from jc_goods where typeid = $typeId   limit $row,$count"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* ������Ʒ��ţ�goodsid����ѯ��Ʒ��Ϣ
*/

function findGoodsByGoodsId($goodsId){
	$strQuery = "select * from jc_goods where goodsid = $goodsId"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs[0];
	}
	return $rs;
}
/*
* ������Ʒ����ģ����goodsname����ѯ��Ʒ��Ϣ
*/

function findGoodsByName($Name){
	$strQuery = "select * from jc_goods where goodsname like '%$Name%'"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/*
* ������Ʒ����ģ����goodsname����ѯ��ҳ��Ʒ��Ϣ
*/

function findGoodsByNamelist($Name,$row,$count){
	$strQuery = "select * from jc_goods where goodsname like '%$Name%' limit $row,$count"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}
/**
* �����Ƿ��Ƽ���recommend����ѯ��Ʒ��Ϣ
*/
function findGoodsByRecommend($recommend){
	$strQuery = "select * from jc_goods where recommend = $recommend"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
		return $rs;
	}
	return $rs;
}
/**
* �����Ƿ��Ƽ���recommend����ҳ��ѯ��Ʒ��Ϣ
*/
function findGoodsByReList($row,$count){
	$strQuery ="select * from jc_goods where recommend=1 order by goodsid desc limit $row,$count"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
		return $rs;
	}
	return $rs;
}
/**
* ������Ʒ
*/
function addGoods($typeid,$norms,$goodsname,$size,$installment,$prodate,$goodsprice,$discount,$photo,$introduction,$recommend,$newgoods){ //����Ϊ��Ӧ���ݿ����ֶΣ�����goodsid����Ҫ�ֶ����ӣ���Ϊ����������
	$insertStr = "insert into jc_goods(typeid,norms,goodsname,size,installment,prodate,goodsprice,discount,photo,introduction,recommend,newgoods) values ($typeid,$norms,'$goodsname','$size','$installment','$prodate','$goodsprice','$discount','$photo','$introduction',$recommend,$newgoods)"; //SQL���
	$rs = execUpdate($insertStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* �޸���Ʒ
*/
function updateGoods($goodsid,$typeid,$norms,$goodsname,$size,$installment,$prodate,$goodsprice,$discount,$photo,$introduction,$recommend,$newgoods){ //����Ϊ��Ӧ���ݿ����ֶ�
	$updateStr = "update jc_goods set typeid = $typeid,norms = $norms,goodsname = '$goodsname',size = '$size',installment = '$installment',prodate = '$prodate',goodsprice = '$goodsprice',discount = '$discount',photo = '$photo',introduction = '$introduction',recommend = $recommend,newgoods = $newgoods where goodsid = $goodsid"; //SQL���
	$rs = execUpdate($updateStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}
/*
* ɾ����Ʒ
*/
function deleteGoods($goodsid){ //������Ʒ���ɾ����Ʒ
	$deleteStr = "delete from jc_goods where goodsid = $goodsid";
	$rs = execUpdate($deleteStr);//����comm.php�е�execUpdate����
	return $rs;//����ִ�н��
}


/*
 * ��̨������
 * 
 */

function findAllGood(){
	$strQuery = "select * from jc_goods "; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}

/**
* �����к������к�������ѯ��Ʒ��Ϣ
*/
function findGoodsLimit($line,$row){
	$strQuery = "select * from jc_goods limit $line,$row"; //��ѯ���
	$rs = execQuery($strQuery);//����comm.php�е�execQuery����
	if(count($rs)>0){ //�жϲ�ѯ�Ƿ�ɹ�
	
		return $rs;
	}
	return $rs;
}

?>
