<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我的订单</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>
<script>
	function confrimDelete(orderid){
		if(confirm('确定删除该订单？')){
			location.href="delIndent.php?orderid="+orderid;
		}
	}
</script>
<?php include "header.php"?>
<?php include_once "include/jc_type.php";?>
<body>

    <!-- ========================
    Offcanvas Menu Area Start 
    ===========================-->
    
    <!-- ========================
    Offcanvas Menu Area End 
    ===========================-->

    <!-- =================
    Header Area Start 
    =====================-->
    <div class="header-area header-three">
        <!-- Header Top Start -->
       
        <!-- Header Top End -->
        <!-- Header Middle Start -->
        <div class="header-middle space-40 sticker">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/pos-circle-logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <div class="header-middle-inner">
                            <!-- Main Menu Start -->
                            <div class="header-menu float-left add-sticky">
                                <div class="sticky-container">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/images/logo/pos-circle-logo.png" alt="" class="img-fluid"></a>
                                    </div>
                                    <nav class="main-menu">
                                            <ul>
                                            	<?php
                                            	$tj=findAll();
                                            	foreach($tj as $row_1){
                                            	?>
                                                <li>
                                                    <a href="showType.php?typeid=<?php echo $row_1['typeid'];?>"><?php echo $row_1['typename'];?></a>
                                                </li>
                                            	<?php
                                            	}
                                            	?>
                                            </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Main Menu End -->
                          <div class="blockcart">
                              <a href="shoppingCart.php">
                                  <img src="assets/images/cart/cart.png" alt="" class="img-fluid">
                                  <span class="my-cart">购物车</span>
                          		<?php 
                          		if(isset($_SESSION['shoppingCar'])){
                          			$arr = $_SESSION['shoppingCar'];
                          			echo "<span class='count'>".count($arr)."</span>";
                          			}
                          		?>
                              </a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->
        <!-- Header Bottom Start -->
        <div class="header-menu header-bottom-area theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Category Menu Start -->
                        <div class="categoryes-menu-bar">
                            <div class="categoryes-menu-btn category-toggle">
                                <div class="float-left">
                                    <a href="#">所有分类</a>
                                </div>
                                <div class="float-right">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                            <nav class="categorye-menus category-dropdown">
                                <ul class="categories-expand">
                                    <?php
                                    foreach($tj as $row_1){
                                    ?>
                                    <li>
                                        <a href="showType.php?typeid=<?php echo $row_1['typeid'];?>"><?php echo $row_1['typename'];?></a>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- Category Menu End -->
                    </div>
                    <div class="col-lg-9">
                        <div class="search-container">
                            <form action="search.php" method="post">
                                <div class="top-cat">
                                    <select class="select-option"  id="category2">
                                        <option value="1">所有分类</option>
                                        
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input class="header-search" name="goodskeys" placeholder="请输入关键字..." type="text">
                                    <button class="header-search-button" name="submitkeys" type="submit">搜索商城物品</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End  -->
    </div>
    <!-- =================
    Header Area  End 
    =====================-->

    <!--=====================
    Breadcrumb Aera Start
    =========================-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li>
                                <h1><a href="index.php">主页</a></h1>
                            </li>
                            <li>我的订单</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================
    Breadcrumb Aera End
    =========================-->

    <!--======================
    wishlist area Start
    ==========================-->
    <div class="wishlist-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="cart-form">
                        <!-- Wishlist Title Start -->
                        <div class="wishlist-title">
                            <h5 class="last-title mt-50 mb-20">我的订单</h5>
                        </div>
                        <!-- Wishlist Title End -->
                        <!-- Wishlist Table Area Start -->
						
                        <div class="table-desc wishlist-margin">
                            <div class="wishlist-page cart-page table-responsive">
								
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-image">订单号</th>
                                            <th class="product-name">收货人</th>
											<th class="product-stock">付款方式</th>
                                            <th class="product-price">订单总金额</th>
											<th class="product-cart">订单状态</th>
											<th class="product-cart">下单时间</th>
                                            <th class="product-remove">删除订单</th>
                                        </tr>
                                    </thead>
                                    <tbody>
											<?php
											//以下为显示订单
											include "include/jc_indent.php";
											if(!isset($_SESSION['islogin'])){
												echo "<script>alert('请登录');</script>";
												echo "<script>location.href='login.php';</script>";
											}else{	
												$userid=$_SESSION['userid'];
												$rs = findIndentByUserId($userid);
												if(!empty($rs)){
												foreach($rs as $value){
											?>
                                        <tr>
                                            <td class="product-image"><?php echo $value['orderid'];?></td>
                                            <td class="product-name"><?php echo $value['consignee'];?></td>
                                            <td class="product-stock">货到付款</td>
											<td class="product-price">￥<?php echo $value['total'];?></td>
											<td class="product-cart"><?php echo $value['status'];?></td>
											<td class="product-cart"><?php echo $value['orderdate'];?></td>
                                            <td class="product-remove"><a href="#" onclick="confrimDelete(<?php echo $value['orderid'];?>)"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
										<?php
												}
												
											}else{
												echo "没有任何订单";
											 }
										  }
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- Wishlist Table Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    wishlist area Start
    ==========================-->

    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
       
        <div class="footer-top mt-50 mb-40">

        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="footer-bottom-content">
                            <div class="footer-copyright">
                                <p>Copyright JiaChen; 2021.JiaChen All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="payment">
                            <a href="#">
                                <img src="assets/images/payment/footerend.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--===================
     footer area end 
    ===================-->

    <!-- Scroll To Top Start -->
    <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
    <!-- Scroll To Top End -->




    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>