<?php
include "../include/jc_goods.php";
if(isset($_POST['ok'])){ // 根据提交按钮的 name 属性值判断是否体积成功
	/**
		获取表单传过来的值，根据表单 name 属性的值获取值
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
	
	
	$goods=findGoodsByGoodsName($name);//应用数据库访问层的方法
	if(!empty($goods)){
		echo "<script>alert('This Goods has existed!');</script>";
		echo "<script>location.href='addGoods.php';</script>";
	}else{
		if(is_uploaded_file($_FILES[$myfile]['tmp_name'])){				//判断是否为上传文件
			$tpname=$_FILES[$myfile]['name'];							//接收上传文件的文件名
			$type=$_FILES[$myfile]['type'];								//接收上传文件的类型
			$tmp=$_FILES[$myfile]['tmp_name'];							//接收上传文件的临时存放目录、文件名
			$error=$_FILES[$myfile]['error'];							//接收上传文件的错误返回值
			$photo="../upimages/".$tpname;
			switch($type){												//判断上传文件的类型，只能上传pjpeg,jpeg,gif,png图片格式的文件
			case "image/pjpeg": $pdz=1; break;
			case "image/jpeg": $pdz=1; break;
			case "image/gif": $pdz=1; break;
			case "image/png": $pdz=1; break;
			default: echo "不能上传其它格式文件！";
			}
			if($pdz==1 && $error==0){
				move_uploaded_file($tmp,$photo); //如果上传文件的格式正确且上传成功，则将文件从临时目录放入uploads文件夹
				$photopath="upimages/".$tpname;
				$ztj=addGoods($typeid,$norms,$name,$size,$installment,$prodate,$goodsprice,$discount,$photopath,$introduction,$recommend,$newgoods);//应用数据库访问层的方法
		 
				if($ztj==1){			//返回结果为1则添加成功
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