<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
		搜索商品
	</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>
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
                            <li>
								搜索商品
							</li>
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
    Shop Fullwidth area Start
    ==========================-->
    <div class="shop-fullwidth-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Shop Toolbar Start -->
                    <div class="toolbar-shop mb-50">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" class="btn-grid-4"></button>
                            <button data-role="grid_3" class="btn-grid-3"></button>
                            <button data-role="grid_list" class="btn-list active"></button>
                        </div>
						<?php
							include_once"include/jc_goods.php";
						?>
						<?php
						$goodskeys = "";//搜索关键词
						$rownums = 0;//总记录数
						$page_num = 0;//总页数
						$size=12; //每页显示数
						
						
						if(isset($_POST['submitkeys'])){
						    $goodskeys=$_POST['goodskeys'];
						}
						
						if(@$_GET['page_id']){ //获取分页数据
							$page_id=$_GET['page_id'];
							$start=($page_id-1)*$size;
						}else{
							$page_id=1;
							$start=0;
						 }
						 
						 $cx=findGoodsByName($goodskeys);//调用函数进行模糊查询
						 if($cx) {
						         $rownums = count($cx);
						        // alert("总记录数".$rownums);
						 }
						 else{
						 	$cx=0;//调用函数进行模糊查询
						  }
						  
						 $page_num=ceil( $rownums/$size);
						 
						 if($rownums){
						 	$fycx=findGoodsByNamelist($goodskeys,$start,$size);//调用函数进行模糊查询并分页
						 }else{
						 	$fycx=array();findGoodsByNamelist($goodskeys,$start,$size);//调用函数进行模糊查询并分页
						  }
						  
						 
						 ?>
						
						
						
                        <div class="page-amount">
                            <p>共有<?php echo $rownums;?>件商品</p>
                        </div>
                    </div>

			
                    <div class="row shop-wrapper grid_list">
						<?php
						if(count($fycx)==0){
							echo "<p style='left:45%;position:relative;'>对不起,没有相关的内容</p>";
						}else{
						foreach($fycx as $row){
						?>
                        <div class="col-12 mb-20">
                            <!-- Single-Product-Start -->
							
                            <div class="item-product pt-0">
                                <div class="product-thumb">
                                    <a href="product-details.php?id=<?php echo $row['goodsid'];?>">
                                        <img src="<?php echo $row['photo'];?>" width="214px" height="214px" >
                                    </a>
                                   
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="product-details.php?id=<?php echo $row['goodsid'];?>" title="Quick view" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                       
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.php?id=<?php echo $row['goodsid'];?>"><?php echo $row['goodsname'];?></a>
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
											$bookprice=sprintf('%.2f',$row['goodsprice']);
											$discount=$row['discount'];
											$xj=$bookprice*$discount;
											echo sprintf('%.2f',$xj);
											?>
										</span>
                                        <span class="old-price"><del>￥<?php echo sprintf('%.2f',$row['goodsprice']);?></del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="addShoppingCar.php?goodsid=<?php echo $row['goodsid'];?>" title="添加到购物车"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-list-caption align-items-center">
                                    <div class="product-name">
                                        <a href="product-details.php?id=<?php echo $row['goodsid'];?>"><?php echo $row['goodsname'];?></a>
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
												echo sprintf('%.2f',$xj);
											?>
										</span>
                                    </div>
                                    <p><?php echo $row['introduction']?></p>
                                    <div class="text-available">
                                        <p><strong>可用库存:</strong><span> 99件</span></p>
                                    </div>
                                   
                                    <div class="cart-list-button">
                                        <a href="addShoppingCar.php?goodsid=<?php echo $row['goodsid'];?>" class="cart-btn">添加到购物车</a>
                                    </div>
                                </div>
                            </div>
							
                            <!-- Single-Product-End -->
							</div>
							<?php
								}
							}
							?>
                        </div>
						 </div>
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Shop Toolbar Start -->
                    <div class="toolbar-shop toolbar-bottom">
                        <div class="page-amount">
                            <p><?php echo "本页展示".$size."件商品";?></p>
                        </div>
                        <div class="pagination">
                            <ul>
								<?php 
									$prepage=$page_id-1;    //上一页  
									$nextpage=$page_id+1;   //下一页
                        if($page_id>1 && $page_num>1){
                        	 echo    "<li class='previous'><a href='?page_id=$prepage'><i class='fa fa-angle-left'></i> 上一页</a></li>";
                        }
                                                   
                        for($x=1; $x<=$page_num; $x++){
                        	
                        		echo   "<li><a href='?page_id=$x'>".$x."</a></li>";
                        	}
                        	
                        if($page_id>=1 && $page_num>$page_id){
                        	 echo   "<li class='next'><a href='?page_id=$nextpage'>下一页 <i class='fa fa-angle-right'></i></a></li>";
                        }
								?>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop Toolbar End -->
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shop Fullwidth area End
    ==========================-->

    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
        <!-- Newslatter area start -->
        
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


    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>