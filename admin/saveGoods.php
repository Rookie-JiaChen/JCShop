<?php
include "../include/jc_goods.php";
if(isset($_POST['ok'])){ // �����ύ��ť�� name ����ֵ�ж��Ƿ�����ɹ�
	/**
		��ȡ����������ֵ�����ݱ� name ���Ե�ֵ��ȡֵ
	*/
	$name=$_POST['goodsname'];
	$norms=$_POST['norms'];
	$typeid=$_POST['type'];
	$size=$_POST['size'];
	$installment=$_POST['installment'];
	$prodate=$_POST['prodate'];
	$goodsprice=$_POST['goodsprice'];
	$discount=$_POST['discount'];
	$myfile="file";
	$introduction=$_POST['introduction'];
	$recommend=$_POST['recommend'];
	$newgoods=$_POST['newgoods'];
	
	
	$goods=findGoodsByGoodsName($name);//Ӧ�����ݿ���ʲ�ķ���
	if(!empty($goods)){
		echo "<script>alert('This Goods has existed!');</script>";
		echo "<script>location.href='addGoods.php';</script>";
	}else{
		if(is_uploaded_file($_FILES[$myfile]['tmp_name'])){				//�ж��Ƿ�Ϊ�ϴ��ļ�
			$tpname=$_FILES[$myfile]['name'];							//�����ϴ��ļ����ļ���
			$type=$_FILES[$myfile]['type'];								//�����ϴ��ļ�������
			$tmp=$_FILES[$myfile]['tmp_name'];							//�����ϴ��ļ�����ʱ���Ŀ¼���ļ���
			$error=$_FILES[$myfile]['error'];							//�����ϴ��ļ��Ĵ��󷵻�ֵ
			$photo="../upimages/".$tpname;
			switch($type){												//�ж��ϴ��ļ������ͣ�ֻ���ϴ�pjpeg,jpeg,gif,pngͼƬ��ʽ���ļ�
			case "image/pjpeg": $pdz=1; break;
			case "image/jpeg": $pdz=1; break;
			case "image/gif": $pdz=1; break;
			case "image/png": $pdz=1; break;
			default: echo "�����ϴ�������ʽ�ļ���";
			}
			if($pdz==1 && $error==0){
				move_uploaded_file($tmp,$photo); //����ϴ��ļ��ĸ�ʽ��ȷ���ϴ��ɹ������ļ�����ʱĿ¼����uploads�ļ���
				$photopath="upimages/".$tpname;
				$ztj=addGoods($typeid,$norms,$name,$size,$installment,$prodate,$goodsprice,$discount,$photopath,$introduction,$recommend,$newgoods);//Ӧ�����ݿ���ʲ�ķ���
		 
				if($ztj==1){			//���ؽ��Ϊ1����ӳɹ�
					echo "<script>alert('Add Success!');</script>";
					echo "<script>location.href='showGoods.php';</script>";
				}else{
					echo "<script>alert('Add Failed!');</script>";
					echo "<script>location.href='addGoods.php';</script>";
				}
			}
		}else{
			echo "<script>alert('Upload Picture Failed!');</script>";
		}
	}
	
	
}
?>