<?php
include_once "../include/jc_type.php";
include_once "../include/jc_goods.php";
$goodsid=$_GET['id'];
if(isset($_POST['ok'])){
	$goodsname=$_POST['goodsname'];
	$norms=$_POST['norms'];
	$type=$_POST['goodstype'];
	$size=$_POST['size'];
	$installment=$_POST['installment'];
	$prodate=$_POST['prodate'];
	$goodsprice=$_POST['goodsprice'];
	$discount=$_POST['discount'];
	$myfile="file";
	$introduction=$_POST['introduction'];
	$recommend=$_POST['recommend'];
	$newgoods=$_POST['newgoods'];
	//����������Ʋ�ѯ�����ţ����Ų��뵽���ݿ�
				
	$types=findTypeByTypeName($type);
	$xlb=$types['typeid'];
	//�ϴ���ͼƬ
	if(is_uploaded_file($_FILES[$myfile]['tmp_name'])){
		$tpname=$_FILES[$myfile]['name'];
		$phototype=$_FILES[$myfile]['type'];
		$tmp=$_FILES[$myfile]['tmp_name'];
		$error=$_FILES[$myfile]['error'];
		$photo="../upimages/".$tpname;
		switch($phototype){
			case "image/pjpeg": $pdz=1; break;
			case "image/jpeg": $pdz=1; break;
			case "image/gif": $pdz=1; break;
			case "image/png": $pdz=1; break;
			default: echo "�����ϴ�������ʽ�ļ���";
		}
		if($pdz==1 && $error==0){
			move_uploaded_file($tmp,$photo);
			$photo="upimages/".$tpname;
		}
	}else{
		//���û���ϴ���ͼƬ����ԭ����ͼƬ
		$tpres=findGoodsByGoodsId($goodsid);
		$photo=$tpres['photo'];
	}
	$xgtj=updateGoods($goodsid,$xlb,$norms,$goodsname,$size,$installment,$prodate,$goodsprice,$discount,$photo,$introduction,$recommend,$newgoods);
	if($xgtj==1){
		echo "<script>alert('Modify Success!');</script>";
		echo "<script>location.href='showGoods.php';</script>";
	}else{
		echo "<script>alert('Modify Failed!');</script>";
		echo "<script>location.href='showGoods.php';</script>";

	}
}
?>