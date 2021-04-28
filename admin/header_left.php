	<?php
	session_start();
	if(!isset($_SESSION['adminflag'])){
		echo "<script>alert('请先登录!');</script>";
		echo "<script>location.href='index.php';</script>";
	}
	?>	
	<!-- Navigation -->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php">JCShop后台</a>
		</div>
		<!-- /.navbar-header -->
		<ul class="nav navbar-nav navbar-right">
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/cd-icon-username.png"></a>
				<ul class="dropdown-menu">
					<li class="dropdown-menu-header text-center">
						<strong>设置</strong>
					</li>
					<li class="m_2"><a href="admininfo.php"><i class="fa fa-user"></i> 个人信息</a></li>
					<li class="m_2"><a href='logout.php?id=1'><i class="fa fa-lock"></i> 退出 </a></li>
				</ul>
			</li>
		</ul>
	<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="home.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>主页</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-laptop nav_icon"></i>商品管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="addGoods.php">添加商品</a>
									</li>
									<li>
										<a href="showGoods.php">管理商品</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#"><i class="fa fa-file-text nav_icon"></i>商品类型管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="showType.php">修改类别</a>
									</li>
									<li>
										<a href="addType.php">添加类别</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#"><i class="fa fa-group nav_icon"></i>用户管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="showUsers.php">会员管理</a>
									</li>
									<li>
										<a href="showAdmin.php">查看管理员</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
						
							<li>
								<a href="#"><i class="fa fa-indent nav_icon"></i>订单管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="showIndent.php">管理订单</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
  </nav>