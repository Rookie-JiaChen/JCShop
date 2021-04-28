<!doctype html>
<!-- <html class="no-js" lang="en"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我的购物车</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
<script>
	function confrimDelete(goodsid){
		if(confirm('确定把该商品从购物车中移除？')){
			location.href="delGFCart.php?goodsid="+goodsid;
		}
	}
</script>
</head>
<?php header("content-type:text/html;charset=utf-8");?>
<?php include "header.php";?>
<?php include_once "include/jc_type.php";?>
<body>

   

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
                            <li>购物车</li>
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
    Shopping Cart area Start
    ==========================-->
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="updateGoodNum.php" class="cart-form" method="post">
                        <!-- Cart Title Start -->
                        <div class="cart-title">
                            <h5 class="last-title mt-50 mb-20">我的购物车</h5>
                        </div>
                        <!-- Cart Title End -->
                        <!-- Cart Table Area Start -->
                        <div class="table-desc">
                            <div class="cart-page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-image">商品图片</th>
                                            <th class="product-name">商品名称</th>
                                            <th class="product-price">商品价格</th>
                                            <th class="product-quantity">数量</th>
                                            <th class="product-total">小计</th>
                                            <th class="product-remove">删除</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
												if(isset($_SESSION['shoppingCar'])){
													$arr = $_SESSION['shoppingCar'];
													$total=0;
													foreach($arr as $val){	
										?>
                                        <tr>
                                            <td class="product-image"><a href="#"><img src="<?php echo $val['photo'];?>" width="100px" height="100px"></a></td>
                                            <td class="product-name"><a href="#"><?php echo $val['goodsname'];?></a></td>
                                            <td class="product-price">￥<?php echo $val['goodsprice'];?></td>
                                            <td class="product-quantity"><label>数量</label> <input min="1" max="100" value="<?php echo $val['num'];?>" type="number" name="num[]"></td>
                                            <td class="product-total">￥<?php $total+=$val['num']*$val['goodsprice']; echo $val['num']*$val['goodsprice'];?></td>
                                            <td class="product-remove"><a href="#" onclick="confrimDelete('<?php echo $val['goodsid'];?>')"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
										<?php
													}
												}else{
													echo "<script>alert('您的购物车为空，请前往购买页面进行购买！');</script>";
													echo "<script>location.href='index.php'</script>";	
												}
										?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-submit">
								<a href="clearShoppingCar.php"><button type="button" >清空购物车</button></a>
                                <button type="submit" name="updateGoodNum">更新购物车</button>
                            </div>
                        </div>
                        <!-- Cart Table Area End -->
                        <!-- Coupon Area Start -->
                        <div class="coupon-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon-code right">
                                        <h3>购物车总计</h3>
                                        <div class="coupon-inner">
                                            <div class="cart-subtotal">
                                                <p>小计</p>
                                                <p class="cart-amount">￥<?php echo $total;?></p>
                                            </div>
                                            <div class="cart-subtotal ">
                                                <p>运费</p>
                                                <p class="cart-amount"><span>统一价格:</span>￥0</p>
                                            </div>
                                            <a href="#">包邮</a>

                                            <div class="cart-subtotal">
                                                <p>总计</p>
                                                <p class="cart-amount">￥<?php echo $total;?></p>
                                            </div>
                                            <div class="checkout-btn">
                                                <a href="checkout.php">结算</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Coupon Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shopping Cart area End
    ==========================-->

    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
    
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