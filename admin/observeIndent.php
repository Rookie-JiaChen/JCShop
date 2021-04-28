
<!DOCTYPE HTML>
<html>
<head>
<title>订单详情</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- Custom CSS -->
<link href="css/style_index.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"> 
<!-- jQuery -->
<script src="js/jquery-3.4.1.min.js"></script>

<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</head>
<?php include "header_left.php";?>

<?php 
include "../include/jc_indent.php";//引入数据库访问层方法
include_once "../include/jc_goods.php";
?>
<body>
<div id="wrapper">
     <!-- Navigation -->
        
		<div id="page-wrapper" style="min-height: 918px;">
        <div class="col-md-12 graphs" style="height: 100%;">
	   <div class="xs">
  	 <h3>订单详情</h3>
	 
 
 <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
 				<div class="panel-body no-padding">
 					<table class="table table-striped">
 						<thead>
 							<tr class="warning">
								<th>商品名称</th>
								<th>原价</th>
 								<th>现价</th>
								<th>折扣</th>
								<th>数量</th>
 							</tr>
 						</thead>
 						<tbody>
							<?php
							$orderid=$_GET['mid'];

							$rs = findIndentByOrderId($orderid);//调用数据库访问层方法
							$commodity=$rs['commodity'];
							$exp_commodity=explode('@',$commodity);//分割字符串，以@符合为分隔符分割
							$quantity=$rs['quantity'];
							$exp_quantity=explode('@',$quantity);//分割字符串，以@符合为分隔符分割
							
							if(isset($_POST['ok'])){  //更改订单状态
									   $status=$_POST['status'];//获取表单name属性值传过来的值
									   $tj=updateIndentById($orderid,$status);//调用数据库访问层方法
									   if($tj==1){
										   echo "<script>alert('Update Status Success!');</script>";
										   echo "<script>location.href='observeIndent.php?mid=".$orderid."';</script>";
									   }
								 }
								 
								 for($i=0;$i<count($exp_commodity);$i++){
									$goods = findGoodsByGoodsName($exp_commodity[$i]);	//调用数据库访问层方法
									if(isset($goods['goodsname'])){//数据库中没有存储某些商品导致这行代码来判断！
								
								
							?>
 							
 								<td><?php echo $goods['goodsname'];?></td>
 								<td>￥<?php echo $goods['goodsprice'];?></td>
 								<td>￥<?php echo $goods['goodsprice']*$goods['discount'];?></td>
								<td><?php echo $goods['discount'];?></td>
								<td><?php echo $exp_quantity[$i];?></td>
 							</tr>
 						<?php
 							}
 						}
 						?>
 						</tbody>
						<tfoot>
								<td>订单总计: ￥<?php echo $rs['total'];?></td>		
								<td>下单人: <?php echo $rs["buyer"];?>&nbsp;&nbsp;收货人: <?php echo $rs["consignee"];?></td>
								<td>收货地址: <?php echo $rs["address"];?>&nbsp;&nbsp; 邮编: <?php echo $rs["postcode"];?></td>
								<td>联系电话: <?php echo $rs["telephone"];?>&nbsp;&nbsp; 电子邮箱: <?php echo $rs["email"];?></td>
								<td>送货方式: <?php echo $rs["express"];?></td>	
						</tfoot>
 					</table>
					
					
					<table class="table">
						<thead>
							<tr>
								<td>订单状态: <?php echo $rs['status'];?></td>
							</tr>
							
							<form method="post" action="">		
							<tr>
								<td>
									修改订单状态: &nbsp;&nbsp;
									已收款<input type="radio" name="status" value="已收款" checked="checked" required/>&nbsp;&nbsp;
									已发货<input type="radio" name="status" value="已发货" required/>&nbsp;&nbsp;
									已收货<input type="radio" name="status" value="已收货" required/>&nbsp;&nbsp;
									<input class="btn btn-primary" type="submit" name="ok" value="修改" />
								</td>
							</tr>
							</form>
						</thead>
					</table>
					
 				</div>
 	</div>
  </div>
  <div class="copy_layout" style="position: static;bottom: 10px;left: 49%;">
      <p>Copyright © 2021 JCShop. All Rights Reserved | JiaChen </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
