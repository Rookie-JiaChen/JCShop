<!DOCTYPE HTML>
<html>
	<head>
		<title>JCShop后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<!-- Custom CSS -->
		<link href="css/style_index.css" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="css/lines.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<!-- jQuery -->
		<script src="js/jquery-3.4.1.min.js"></script>

		<!---//webfonts--->
		<!-- Nav CSS -->
		<link href="css/custom.css" rel="stylesheet">

		<!-- Metis Menu Plugin JavaScript -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>

		<!-- Graph JavaScript -->
		<script src="js/d3.v3.js"></script>
		<script src="js/rickshaw.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.js"></script>
		
		<!----Calender -------->
		<link rel="stylesheet" href="css/clndr.css" type="text/css" />
		<script src="js/underscore-min.js" type="text/javascript"></script>
		<script src="js/moment-2.2.1.js" type="text/javascript"></script>
		<script src="js/clndr.js" type="text/javascript"></script>
		<script src="js/site.js" type="text/javascript"></script>
		<!----End Calender -------->
		
	</head>
	<?php include "header_left.php";?>
	<?php include_once "../include/jc_indent.php";?>
	<?php include_once "../include/jc_user.php";?>
	<body>
		<div id="wrapper">
			
			<div id="page-wrapper">
				<div class="graphs">
					<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-indent icon-rounded"></i>
								<div class="stats">
									<?php 
									$date=date('Y-m-d',time());
									$order=findIndentByOrderdate($date);
									$ordernum=count($order);
									?>
									<h5><strong><?php echo $ordernum;?></strong></h5>
									<span>今日订单</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-users user1 icon-rounded"></i>
								<div class="stats">
									<?php
									$user=findUserByRegdate($date);
									$usernum=count($user);
									?>
									<h5><strong><?php echo $usernum;?></strong></h5>
									<span>今日新注册会员</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-dollar user2 icon-rounded"></i>
								<div class="stats">
									<?php
									$orders=findIndentByOrderdate($date);
									$total=0;
									if(count($orders)>=1){
										
										for($i=0;$i<count($orders);$i++){
											$total+=$orders[$i]['total'];
										}
									}
									
									?>
									<h5><strong>￥<?php echo $total;?></strong></h5>
									<span>今日销售额</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
								<div class="stats">
									<?php 
										$allorders=findAllIndent();
										$alltotal=0;
										if(count($allorders)>=1){
											
											for($i=0;$i<count($allorders);$i++){
												$alltotal+=$allorders[$i]['total'];
											}
										}
									?>
									<h5><strong>￥<?php echo $alltotal;?></strong></h5>
									<span>总销售额</span>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col_1">
						<div class="col-md-4 span_7" style="left: 30%;margin-top: 3%;">
							<div class="cal1 cal_2">
								<div class="clndr">
									<div class="clndr-controls">
										<div class="clndr-control-button">
											<p class="clndr-previous-button">previous</p>
										</div>
										<div class="month">Month</div>
										<div class="clndr-control-button rightalign">
											<p class="clndr-next-button">next</p>
										</div>
									</div>
									<table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
										<thead>
											<tr class="header-days">
												<td class="header-day">S</td>
												<td class="header-day">M</td>
												<td class="header-day">T</td>
												<td class="header-day">W</td>
												<td class="header-day">T</td>
												<td class="header-day">F</td>
												<td class="header-day">S</td>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						
						<div class="clearfix"> </div>
					</div>
				
					
					<div class="content_bottom" style="min-width: 800px;min-height: 200px;">
						
						<div class="clearfix"> </div>
					</div>
					<div class="copy">
						<p>Copyright © 2021 JCShop. All Rights Reserved | JiaChen </p>
					</div>
				</div>
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- /#wrapper -->

	</body>
</html>
