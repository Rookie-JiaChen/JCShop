<?php if(!isset($_SESSION))session_start();?>
<div class="header-area">
        <!-- Header Top Start -->
        <div class="header-top full-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="header-top-left">
                            <p><span>Welcome to JC-Shop!</span> </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="box-right">
                            <ul>
                                <li class="settings">
											<?php
												if(isset($_SESSION['username'])&&isset($_SESSION['islogin']))
												{	
													echo $_SESSION['username'].',欢迎光临!';
												}else{
													echo "<a href='login.php'>您好,请登录</a>";
												}
											?>
                                </li>
                                <li class="settings">
									<?php
									if(isset($_SESSION['islogin'])){
										echo "<a href='shoppingCart.php'>购物车</a>";
									}else{
										echo "<a href='register.php'>免费注册</a>";
									}
									?>
                                </li>
                                <li class="settings">
                                    <a href="myIndent.php">
                                        我的订单
                                    </a>
                                </li>
                                <li class="settings">
                                    <a href="my-account.php" >我的账户</a>
                                </li>
								<?php
								if(isset($_SESSION['islogin'])){
									echo "<li class='settings'><a href='quitlogin.php?id=1'>注销</a></li>";
								}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>