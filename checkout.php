<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>结算</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>
<script>
	function submitform(){
		document.getElementById('submitf').click();
	}
</script>
<?php header("content-type:text/html;charset=utf-8");?>
<?php include "header.php";?>
<?php include_once "include/jc_type.php";?>
<body>

    <!-- ========================
    Offcanvas Menu Area Start 
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
                            <form action="#">
                                <div class="top-cat">
                                    <select class="select-option" name="select" id="category2">
                                        <option value="1">所有分类</option>
                                        
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input class="header-search" placeholder="请输入关键字..." type="text">
                                    <button class="header-search-button" type="submit">搜索商城物品</button>
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
                            <li>结算</li>
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
    Checkout area Start
    ==========================-->
    <div class="checkout-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form class="form-row" method="post" action="commitOrder.php" id="buyerinfo">
                        <div class="col-lg-12">
                            <h5 class="form-head">收货信息</h5>
                        </div>
						<input type="hidden" value="未处理" name="status"/>
                        <div class="form_group col-12 col-md-6">
                            <label class="form-label">收货人姓名 <span>*</span></label>
                            <input class="input-form" type="text" name="consignee" placeholder="请输入收货人姓名" required>
                        </div>
                        <div class="form_group col-12 col-md-6">
                            <label class="form-label">下单人姓名 <span>*</span></label>
                            <input class="input-form" type="text" name="buyer" placeholder="请输入下单人姓名" required>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">性别 <span>*</span></label>
                            <input class="input-form" type="text" name="sex" placeholder="请输入性别" required>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label" for="province">省份 <span>*</span></label>
                            <select class="niceselect-option nice-select select-option" name="province" id="province">
								<option >河北省</option>
                                <option >山西省</option>
                                <option >辽宁省</option>
                                <option >吉林省</option>
                                <option >黑龙江省</option>
                                <option >江苏省</option>
                                <option >浙江省</option>
                                <option >安徽省</option>
                                <option >福建省</option>
								<option >江西省</option>
								<option >山东省</option>
								<option >河南省</option>
								<option >湖北省</option>
								<option >湖南省</option>
								<option selected="selected">广东省</option>
								<option >海南省</option>
								<option >四川省</option>
								<option >贵州省</option>
								<option >云南省</option>
								<option >陕西省</option>
								<option >甘肃省</option>
								<option >青海省</option>
								<option >台湾省</option>
                            </select>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">城市 <span>*</span></label>
                            <input placeholder="请输入所在城市" name="city" class="input-form" type="text" required>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">城区 <span>*</span></label>
                            <input class="input-form" type="text" name="area" placeholder="请输入所在城区" required>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">详细街道地址 <span>*</span></label>
                            <input class="input-form" type="text" name="detailaddress" placeholder="请输入所在地详细地址" required>
                        </div> 
						<div class="form_group col-12">
                            <label class="form-label" for="express">快递方式 <span>*</span></label>
                            <select class="niceselect-option nice-select select-option" name="express" id="express" >
								<option selected="selected">嘉辰快递</option>
								<option >顺路快递</option>
								<option >顺水快递</option>
								<option >东风快递</option>
							</select>
                        </div>
                        <div class="form_group col-12 col-md-6">
                            <label class="form-label">联系电话 <span>*</span></label>
                            <input class="input-form" type="tel" placeholder="请输入联系地址" name="telephone" required>
                        </div>
                        <div class="form_group col-12 col-md-6">
                            <label class="form-label">电子邮件 <span>*</span></label>
                            <input class="input-form" type="email" placeholder="请输入电子邮箱" name="email" required>
                        </div>
							<input type="submit" id="submitf" hidden />
                    </form>
                    
                    
                </div>
                <div class="col-lg-6 col-md-6">
                    <form class="form-row">
                        <div class="col-lg-12">
                            <h5 class="form-head rs-padding">订单详情</h5>
                        </div>
                        <div class="col-lg-12">
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>商品</th>
                                            <th>小计</th>
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
                                            <td> <?php echo $val['goodsname'];?> <strong> × <?php echo $val['num'];?></strong></td>
                                            <td>￥<?php $total+=$val['num']*$val['goodsprice']; echo $val['num']*$val['goodsprice'];?></td>
                                        </tr>
										<?php
													}
												}else{
													echo "<script>alert('您的购物车为空，请前往购买页面进行购买！');</script>";
													echo "<script>location.href='index.php'</script>";	
												}
										?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>小计</th>
                                            <td>￥<?php echo $total;?></td>
                                        </tr>
                                        <tr>
                                            <th>运费</th>
                                            <td><strong>￥0</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>总计</th>
                                            <td><strong>￥<?php echo $total;?></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </form>
                    
                    <div class="form-row justify-content-end mt-20 mb-20">
                        <button type="button" class="btn-secondary" value="提交订单" onclick="submitform()">提交订单</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Checkout area End
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

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>