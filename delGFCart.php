<?php
	session_start();
	if(isset($_GET['goodsid'])){
		$goodsid = $_GET['goodsid'];
		if($_SESSION['shoppingCar']){
			unset($_SESSION['shoppingCar'][$goodsid]);
			if(count($_SESSION['shoppingCar'])==0){
				unset($_SESSION['shoppingCar']);	
			}
		}
	}
	header("Location:shoppingCart.php");
?>
