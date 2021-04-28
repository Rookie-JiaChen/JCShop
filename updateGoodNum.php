<?php
	session_start();
	if(isset($_REQUEST['updateGoodNum'])){		//判断表单是否提交
		$num = $_REQUEST['num']; //获取商品数量
		if(isset($_SESSION['shoppingCar'])){
			$arr = $_SESSION['shoppingCar'];
			$i = 0;
			foreach($arr as $key=>$val){
				$arr[$key]['num'] = $num[$i];
				$i++;
			}
			$_SESSION['shoppingCar'] = $arr;	
		}
		echo "<script>alert('更新成功');</script>";
		echo "<script>location.href='shoppingCart.php';</script>";
	}
	
?>
