<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>注册</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
<script>
	function changecode(){
	    document.getElementById('code').src="include/code.php?"+Math.random();
	}
</script>
</head>
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
                            <li>注册</li>
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
    Register area Start
    ==========================-->
    <div class="register-area login-area mt-25">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="checkout_info mb-20">
                        <form class="form-row" action="addRegister.php" method="post" onsubmit="return checkpwd(this);">
                            <h5 class="last-title mb-10 text-center">注册新用户</h5>
                            <div class="col-lg-12 text-left mb-20">
                                <p class="register-page"> 已经有帐户了? <a href="login.php">点击登录!</a></p>
                            </div>
                            <div class="form_group col-12">
                                <label class="form-label">用户名<span>*</span></label>
                                <input class="input-form" type="text" name="username" placeholder="请输入用户名" required>
                            </div>
                            <div class="form_group col-12">
                                <label class="form-label">电子邮箱<span>*</span></label>
                                <input class="input-form" type="email" name="email" placeholder="请输入电子邮箱(可用于找回密码)" required>
                            </div>
                            <div class="form_group col-12">
                                <label class="form-label">登陆密码<span>*</span></label>
                                <input class="input-form " type="password" name="password" id="password" placeholder="请输入密码" required>
                            </div>
                            <div class="form_group col-12">
                                <label class="form-label">确认密码<span>*</span></label>
                                <input class="input-form " type="password" name="repassword" id="repassword" placeholder="请再次输入密码" required>
                            </div>
                            <div class="form_group col-12">
                                <label class="form-label">联系电话</label>
                                <input class="input-form " type="tel" name="telephone" placeholder="请输入联系电话">
                            </div>
                            <div class="form_group col-12 ">
                                <label class="form-label">联系地址</label>
                                <input class="input-form" type="text" name="address" placeholder="请输入联系地址">
                            </div>
							<div class="form_group col-12">
							    <label class="form-label">验证码<span>*</span></label>
							    <input class="input-form input-login" type="text" name="code" required placeholder="请输入验证码">
								<img id="code" style="position: absolute;right: 1px;" alt="点击切换验证码" src="include/code.php"  onclick="changecode()"/>
							</div>
                           
                            <div class="form-row mt-20">
                                <input type="submit" class="btn-secondary" name="registering" value="注册">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Register area End
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
	<script>
		function checkpwd(form){
			var pwd = document.getElementById("password").value;
			var repwd = document.getElementById("repassword").value;
			if(pwd == repwd)
			     {
			        return true;
			     }
			else {
			        alert("Please enter the same password!");
					return false;
			     }
		}
	</script>

</body>

</html>