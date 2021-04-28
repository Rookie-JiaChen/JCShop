<?php
	include_once 'include/jc_goods.php';
	session_start();
	
	if(isset($_SESSION['islogin'])&&$_SESSION['islogin']==1){
			
	if(isset($_REQUEST['goodsid'])){
		$goodsid = $_REQUEST['goodsid'];
		
		$rs = findGoodsByGoodsId($goodsid);
		
		if(isset($_POST['num'])){  //判断是否获得商品数量
			$num=$_POST['num'];
		}else{
			$num=1;
		}
		
		if(count($rs)>0){							 //判断是否在数据库中找到该商品
			$good = $rs;							 //取出返回结果集中的商品	
			if(isset($_SESSION['shoppingCar'])){     //判断Session中是否存在这个变量(即是否存在购物车)
				$arr = $_SESSION['shoppingCar'];
				if(array_key_exists($goodsid,$arr)){	 //判断该数组中是否存在这个键值(即判断购物车中是否已经存在该商品)	
						
					$arr[$goodsid]['num'] += $num; 		 //如果存在该商品，则数量+1	
				}
				else{
					//以前没有买过该商品，把该商品添加至购物车
					$arr[$goodsid] = array('goodsname'=>$good['goodsname'],'goodsprice'=>$good['goodsprice'],'num'=>$num,'goodsid'=>$goodsid,'photo'=>$good['photo']);		
				}
				$_SESSION['shoppingCar'] = $arr;
			}
			else{
				//说明购物车为空
				$arr[$goodsid] = array('goodsname'=>$good['goodsname'],'goodsprice'=>$good['goodsprice'],'num'=>$num,'goodsid'=>$goodsid,'photo'=>$good['photo']);	
				$_SESSION['shoppingCar'] = $arr;
			}
		}
		//在数据库中没找到该商品
		else{
			echo "<script>alert('检索商品失败，该商品无法添加至购物车！');</script>";
		}
	}
	echo "<script>location.href='shoppingCart.php';</script>";
	}
	else{
		header("Location:login.php");
	}

	


?>
