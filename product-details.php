<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php include "header.php"?>
	<?php include_once "include/jc_type.php";?>
	<?php include_once "include/jc_goods.php";//导入数据库访问层?>
    <title>
		<?php
			$id=$_GET['id'];
			$row=findGoodsByGoodsId($id);//根据id查询商品
			echo $row['goodsname'];
		?>
		
	</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

   
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <!-- ========================
    Offcanvas Menu Area Start 
    ===========================-->
    <!-- =================
    Header Area Start 
    =====================-->
    <div class="header-area header-three">
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
                            <li>商品详情</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================
    Breadcrumb Aera End
    =========================-->

    <!-- ========================
    Product Details Area Start 
    ===========================-->
	<?php
	
	
	if($row==0){
		echo "本商品不存在";
	}else{
	?>
    <div class="product-area product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 mt-50">
                    <!-- Product Zoom Image start -->
                    <div class="product-slider-container arrow-center text-center">
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                           <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                        <div class="product-item">
                            <a href="<?php echo $row['photo'];?>"><img src="<?php echo $row['photo'];?>"  style="width: 470px;height: 470px;" /></a>
                        </div>
                    </div>
                    <!-- Product Zoom Image End -->
                    <!-- Product Thumb Zoom Image Start -->
                    <div class="product-details-thumbnail arrow-center text-center">
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                           <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                        <div class="product-item-thumb">
                            <img src="<?php echo $row['photo'];?>" class="img-fluid"  />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12 mt-45">
                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">
                        <div class="product-head">
                            <h1 class="product-title"><?php echo $row['goodsname'];?></h1>
                            
                        </div>
                        <div class="rating-meta d-flex">
                            <div class="rating">
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                        <div class="price-box">
                            原价:<span class="regular-price" style=" text-decoration:line-through;">￥<?php echo sprintf('%.2f',$row['goodsprice']);?></span>
							现价:<span class="regular-price">￥
							<?php
								$bookprice=sprintf('%.2f',$row['goodsprice']);
								$discount=$row['discount'];
								$xj=$bookprice*$discount;
								echo sprintf('%.2f',$xj);
							?> 
							</span>
                        </div>
                        <div class="product-description">
                            <p><?php echo $row['introduction'];?></p>
                        </div>
                        <div class="product-packeges">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>规格</span></td>
                                        <td class="value">
                                            <div class="product-sizes">
												<?php $arr = explode('@',$row['size']);  for($i=0;$i<count($arr);$i++){ ?>
                                                <a href="#"><?php echo $arr[$i];?></a>
												<?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>颜色</span></td>
                                        <td class="value">
                                            <div class="product-colors">
                                                <a href="#" data-bg-color="#000000" style="background-color: rgb(0, 0, 0);"></a>
                                                <a href="#" data-bg-color="#ffffff" style="background-color: rgb(255, 255, 255);"></a>
                                            </div>
                                        </td>
                                    </tr>
									<tr>
										<td class="label"><span>分期</span></td>
										<td class="value">
											
												<?php $arr = explode('@',$row['installment']); for($i=0;$i<count($arr);$i++){?>
												<div style="display: inline-block;"><a href="#"><?php echo $arr[$i];?></a></div>
												<?php } ?>
											
										</td>
									</tr>
                                    <tr>
                                        <td class="label"><span>数量</span></td>
                                        <td class="value">
											<form method="post" action="addShoppingCar.php?goodsid=<?php echo $row['goodsid'];?>">
                                            <div class="product-quantity">
                                                <span class="qty-btn minus"><i class="fa fa-angle-down"></i></span>
                                                <input type="text" class="input-qty" value="1" name="num">
                                                <span class="qty-btn plus"><i class="fa fa-angle-up"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product-buttons grid_list">
                            <div class="action-link">
								<button type="submit" class="btn-secondary" style="">添加到购物车</button></a>
								</form>
                            </div>
                        </div>
						<?php
							}
						?>
                        <div class="product-meta">
                            <div class="desc-content">
                                <div class="social_sharing d-flex">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Summery End -->
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-lg-3 col-sm-3 col-md-2">
                    <!-- Product Description Tab Start -->
                    <div class="product-desc-tab">
                        <ul class="nav flex-column" role="tablist">
                            <li><a class="active" href="#description" role="tab" data-toggle="tab" aria-selected="false">商品描述</a></li>
                            <li><a href="#sheet" role="tab" data-toggle="tab" aria-selected="false">特点</a></li>
                        </ul>
                    </div>
                    <!-- Product Description Tab End -->
                </div>
                <div class="col-lg-9 col-sm-9 col-md-10">
                    <div class="product-desc-tab-content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product_tab_content fade active show">
                            <div class="product_description_wrap mt-20">
                                <div class="product_desc">
                                    <h2 class="last-title mb-20">商品详情</h2>
                                    <p><?php echo $row['introduction'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="sheet" class="product_tab_content fade">
                            <div class="pro__feature mt-20">
                                <h2 class="last-title mb-20">特点</h2>
                                <ul class="feature_list">
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>经济</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>实惠</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>便利</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-play-circle"></i>快捷</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
           
    <!-- ========================
    Product Details Area End 
    ===========================-->


    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
        <!-- Newslatter area start -->
        
        <!-- Newslatter area End -->
        <!-- Footer Top Start -->
        
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

    <!-- modal area start-->
    
    <!-- modal area end-->

    <!-- JS
============================================ -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>