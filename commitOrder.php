<?php
    header("Content-Type:text/html;charset=utf8") ;
	include_once 'include/jc_indent.php';
	session_start();
	date_default_timezone_set('PRC'); 				//����ʱ��
		$consignee = $_POST['consignee'];			//�ռ���
		$sex = $_POST['sex'];						//�Ա�
		$address = $_POST['province'].$_POST['city'].$_POST['area'].$_POST['detailaddress'];	//��ַ						
		$telephone = $_POST['telephone'];			
		$buyer = $_POST['buyer'];
		$email = $_POST['email'];
		$express = $_POST['express'];				
		$status = $_POST['status'];
		$userid = $_SESSION['userid'];
		$postcode= '518000';
		if($arr = $_SESSION['shoppingCar']){
			$arr = $_SESSION['shoppingCar'];
			$commodity ="";
			$quantity ="";
			$total = 0;								
			foreach($arr as $key=>$val)
			{
				$commodity .= $val['goodsname'].'@';
				$quantity .= $val['num'].'@';
				$total += $val['num']*$val['goodsprice'];
			}
			$orderdate = date('Y-m-d',time());     //��õ�ǰʱ��
			addIndent($userid,$commodity,$quantity,$consignee,$sex,$address,$postcode,$telephone,$email,$express,$orderdate,$buyer,$status,$total);
			unset($_SESSION['shoppingCar']);
			echo "<script>alert('Commit Order Success!');</script>";
			echo "<script>location.href='index.php';</script>";
		}

?>
