<!DOCTYPE html>
<!-- <html class="no-js" lang="en"> -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>JCShop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
<!--    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
<script>
	function resizeImage(obj){
		if(obj.height>55)obj.height=214;
		if(obj.width>60)obj.width=214; 
		} 
</script>
</head>
<?php header("content-type:text/html;charset=utf-8");?>
<?php include_once "include/jc_goods.php";?>
<?php include_once "include/jc_type.php";?>
<?php include "header.php";?>
<?php $a=get_Connect();?>
<body>

    <!-- =================
    Header Area Start 
    =====================-->
    <!-- <div class="header-area">
        <!-- Header Top Start -->

		
        <!-- Header Top End -->
		
        <!-- Header Middle Start -->
        <div class="header-middle space-40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/pos-circle-logo.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <div class="header-middle-inner">
                            <div class="search-container">
                                <form action="search.php" method="post">
                                    <div class="top-cat">
                                       <select class="select-option"  id="category2">
                                            <option >所有分类</option>
                                        </select>
                                    </div>
                                    <div class="search_box">
                                        <input class="header-search" name="goodskeys" placeholder="请输入关键字..." type="text">
                                        <button class="header-search-button" name="submitkeys" type="submit">搜索</button>
                                    </div>
                                </form>
                            </div>
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
        <div class="header-menu header-bottom-area theme-bg sticker">
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
									$tj=findAll();//调用函数查询
									foreach($tj as $row){
									?>
                                    <li>
                                        <a href="showType.php?typeid=<?php echo $row['typeid'];?>"><?php echo $row['typename'];?></a>
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
                        <!-- Main Menu Start -->
                        <div class="header-menu add-sticky" style="width: 110%;">
                            <div class="sticky-container">
                               <div class="logo">
                                    <a href="index.php"><img src="assets/images/logo/pos-circle-logo.png" alt="" class="img-fluid"></a>
                                </div>
                                <nav class="main-menu">
                                    <ul>
										<li>
											<a href="showNew.php">新品预售</a>
										</li>
										<li>
											<a href="showRecommend.php">推荐商品</a>
										</li>
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
                        </div>
                        <!-- Main Menu End -->
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
    slider area start
    =========================-->
    <div class="slider_section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="slider_area slider-one mt-30">
                        <!-- Single Slider Start -->
                        <div class="single_slider">
                            <img src="assets/images/slider/slider1.jpg" style="width: 870px;height: 492px;">
                            <div class="slider_content color_one">
                                <h5>联想</h5>
                                    <h2>拯救者<br>Y7000P 2020</h2>
                                        <div class="pt-des">
                                            <p><span>&nbsp;</span>只要<span>￥8499.00</span></p>
                                        </div>
                                        <a href="product-details.php?id=37">立即购买</a>
                            </div>
                        </div>
                        <!-- Single Slider End -->
                        <!-- Single Slider Start -->
                        <div class="single_slider">
                            <img src="assets/images/slider/slider6.jpg" style="width: 870px;height: 492px;">
                            <div class="slider_content color_two">
                                <h5 style="color: #333333;">魅族</h5>
                                    <h2>17 Pro<br>8+128G </h2>
                                        <div class="pt-des">
                                            <p><span>&nbsp;</span>只要<span>￥4299.00</span></p>
                                        </div>
                                        <a href="product-details.php?id=38">立即购买</a>
                            </div>
                        </div>
                        <!-- Single Slider End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
     slider area End
    ==========================-->


    <!--======================
    Shipping area Start
    ==========================-->
    <div class="shipping-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="row all-shipping">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-shipping">
                                <div class="block-wrapper">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">免费配送</h5>
                                        <p>所有订单免费配送</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-shipping">
                                <div class="block-wrapper2">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">7*24小时在线客服</h5>
                                        <p>7*24小时在线客服</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-shipping single-shipping-last">
                                <div class="block-wrapper3">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">支持退换货</h5>
                                        <p>支持退换货</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shipping area End
    ==========================-->


    <!-- =================
    Product Area Start 
    =====================-->
    <div class="product-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs theme-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">推荐商品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">新品预售</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="product-thing slick-custom slick-custom-default">
                                <!-- Single-Product-Start -->
								<?php
								$sqll=findRe(0,9);
								if($sqll==false){
								echo "本站暂无推荐商品!";
								}else{
									foreach($sqll as $info){
								?>
                                <div class="item-product">
                                    <div class="product-thumb">
										
                                        <a href="product-details.php?id=<?php echo $info['goodsid'];?>" >
										<?php
											if(trim($info['photo']=="")){
											echo "暂无图片";
											}else{
										?>
                                            <img src="<?php echo $info['photo'];?>"  onload="resizeImage(this)"/>
                                        </a>
										<?php
											 }
										?>
										
                                        <div class="box-label">
                                            <div class="label-product-recommend">
                                                <span>推荐</span>
                                            </div>
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="product-details.php?id=<?php echo $info['goodsid'];?>" title="Quick view" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.php?id=<?php echo $info['goodsid'];?>">
												<?php $zf=$info['goodsname'];
													if(strlen($zf)>50){
														$zf=substr($zf,0,50);
													}
													echo $zf."..";
												?>
											</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">￥
											<?php
												$bookprice=sprintf('%.2f',$info['goodsprice']);
												$discount=$info['discount'];
												$xj=$bookprice*$discount;
												echo sprintf('%.2f',$xj);
											?>
											</span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a class="cart-plus" href="addShoppingCar.php?goodsid=<?php echo $info['goodsid'];?>" title="添加到购物车"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php
									}
								}
								?>
                                
                                <!-- Single-Product-End -->
                            </div>
                        </div>
						
						
                        <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="product-thing slick-custom slick-custom-default">
                                <!-- Single-Product-Start -->
								<?php
								$newgoods=findNews(0,9);
								if($newgoods==false){
								echo "本站暂无新品推荐!";
								}else{
									foreach($newgoods as $newinfo){
								?>
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.php?id=<?php echo $newinfo['goodsid'];?>" >
                                            <img src="<?php echo $newinfo['photo'];?>"  onload="resizeImage(this)"/>
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>新品</span>
                                            </div>
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="product-details.php?id=<?php echo $newinfo['goodsid'];?>" title="Quick view" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.php?id=<?php echo $newinfo['goodsid'];?>">
                                            	<?php $zf_1=$newinfo['goodsname'];
                                            		if(strlen($zf_1)>50){
                                            			$zf_1=substr($zf_1,0,50);
                                            		}
                                            		echo $zf_1."..";
                                            	?>
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">￥
											<?php
												$bookprice=sprintf('%.2f',$newinfo['goodsprice']);
												$discount=$newinfo['discount'];
												$xj=$bookprice*$discount;
												echo sprintf('%.2f',$xj);
											?>
											</span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a class="cart-plus" href="addShoppingCar.php?goodsid=<?php echo $newinfo['goodsid'];?>" title="添加到购物车"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php
											}
										}
										?>
                                <!-- Single-Product-End -->
                            </div>
                        </div>
                       
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Product Area End
    =====================-->

 
    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
        
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