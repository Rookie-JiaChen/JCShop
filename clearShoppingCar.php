
<?php
	session_start();
	if(isset($_SESSION['shoppingCar'])){
		unset($_SESSION['shoppingCar']);
	}
	header("Location:shoppingCart.php");
?>                                                                                                                                                                                                                                                                       
