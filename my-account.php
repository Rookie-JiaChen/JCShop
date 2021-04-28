<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我的帐户</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


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
                            <li>我的帐户</li>
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
    My Account area Start
    ==========================-->
    <div class="my-account-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <ul class="nav flex-column dashboard-list mb-20 role=" tablist">
                        <li> <a class="nav-link active show" data-toggle="tab" href="#orders">我的订单</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#changepwd">修改密码</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#changetel">修改手机号</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#changeemail">修改电子邮箱</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content mb-20">
                        <div id="orders" class="tab-pane fade active show">
                            <h3 class="last-title">我的订单</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>订单号</th>
                                            <th>下单日期</th>
                                            <th>订单状态</th>
                                            <th>总计</th>
                                            <th>操作</th>
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
                                            <td><?php echo $value['orderid'];?></td>
                                            <td><?php echo $value['orderdate'];?></td>
                                            <td><?php echo $value['status'];?></td>
                                            <td>￥<?php echo $value['total'];?></td>
                                            <td><a class="btn btn-secondary" href="myIndent.php">查看详情</a></td>
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
                        </div> <!-- end of tab-pane -->
						
						<?php include_once "include/jc_user.php";?>
						
						
                        <div id="changepwd" class="tab-pane fade">
                            <h3 class="last-title">修改密码</h3>
							</br>
                            <div class="form_group col-12">
								<form method="post" action="changeInfo.php">
								<label class="form-label">旧密码</label>
                                <input class="input-form" style="width: 50%;" type="password" placeholder="请输入旧密码" required name="oldpwd"/>
								</div>
								<div class="form_group col-12 position-relative">
								<label class="form-label">新密码</label>
								<input class="input-form" style="width: 50%;" type="password" placeholder="请输入新密码" required name="newpwd"/>
								</div>
								<div class="form_group group_3 col-lg-3">
								    <button class="login-register" name="changingPwd" type="submit">提交</button>
								</div>
								</form>
                            
                        </div> <!-- end of tab-pane -->
                        <div id="changetel" class="tab-pane fade">
                           <h3 class="last-title">修改手机号</h3>
                           </br>
                           <div class="form_group col-12">
                           	<form method="post" action="changeInfo.php">
                           	<label class="form-label">当前手机号:</label>
                               <?php 
								$rs=findUserByUserid($_SESSION['userid']);
								if(empty($rs['telephone'])){
									echo "当前帐号未邦定手机号！";
								}else{
									echo $rs['telephone'];
								}
							   
							   ?>
                           	</div>
                           	<div class="form_group col-12 position-relative">
                           	<label class="form-label">新手机号</label>
                           	<input class="input-form" style="width: 50%;" type="tel" placeholder="请输入新手机号" required name="newtel"/>
                           	</div>
                           	<div class="form_group group_3 col-lg-3">
                           	    <button class="login-register" name="changingTel" type="submit">提交</button>
                           	</div>
                           	</form>
                        </div> <!-- end of tab-pane -->
						
                        <div id="changeemail" class="tab-pane fade">
                           <h3 class="last-title">修改电子邮箱</h3>
                           </br>
                           <div class="form_group col-12">
                           	<form method="post" action="changeInfo.php">
                           	<label class="form-label">当前电子邮箱:</label>
                               <?php 
                           								$rs=findUserByUserid($_SESSION['userid']);
                           								if(empty($rs['email'])){
                           									echo "当前帐号未邦定电子邮箱！";
                           								}else{
                           									echo $rs['email'];
                           								}
                           							   
                           							   ?>
                           	</div>
                           	<div class="form_group col-12 position-relative">
                           	<label class="form-label">新电子邮箱</label>
                           	<input class="input-form" style="width: 50%;" type="email" placeholder="请输入新电子邮箱" required name="newemail"/>
                           	</div>
                           	<div class="form_group group_3 col-lg-3">
                           	    <button class="login-register" name="changingEmail" type="submit">提交</button>
                           	</div>
                           	</form>
                            </div>
                        </div> <!-- end of tab-pane -->
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    My Account area End
    ==========================-->

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



    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>