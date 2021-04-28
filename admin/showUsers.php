
<!DOCTYPE HTML>
<html>
<head>
<title>查看会员</title>
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

<?php include "../include/jc_user.php";//引入数据库访问层方法?>
<body>
<div id="wrapper">
     <!-- Navigation -->
        
		<div id="page-wrapper" style="min-height: 918px;">
        <div class="col-md-12 graphs" style="height: 100%;">
	   <div class="xs">
  	 <h3>查看会员</h3>
	 
 
 <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
 				<div class="panel-body no-padding">
 					<table class="table table-striped">
 						<thead>
 							<tr class="warning">
 								<th>选择</th>
 								<th>用户名</th>
 								<th>密码</th>
 								<th>联系电话</th>
								<th>联系地址</th>
								<th>电子邮箱</th>
								<th>注册时间</th>
								<th>操作</th>
 							</tr>
 						</thead>
						
					<form action="delAllUsers.php" method="post">
 						<tbody>
							<?php
							$size=10;//定义每页显示的记录数
							$rs = findAllUser();//调用数据库访问层方法
							$total=count($rs);//计算总记录数
							if($total==0){
								echo "本站暂无用户注册!";
							}else{
								$page_num=ceil($total/$size);
								if(@$_GET['page_id']){
									$page_id=$_GET['page_id'];
									$start=($page_id-1)*$size;
								}else{
									$page_id=1;
									$start=0;
								}
							$rs = findUserLimit($start,$size);//调用数据库访问层方法
							foreach($rs as $key => $value){//循环遍历数组，再跟据数据库列名来打印出数据
							?>
 							<tr>
 								<td><input type="checkbox" name="<?php echo $value['userid'];?>" value="<?php echo $value['userid'];?>"></td>
 								<td><?php echo $value['username'];?></td>
 								<td><?php echo $value['password'];?></td>
 								<td><?php echo $value['telephone'];?></td>
								<td><?php echo $value['address'];?></td>
								<td><?php echo $value['email'];?></td>
								<td><?php echo $value['regdate'];?></td>
								<td><a class=" btn btn-warning" href="modifyUsers.php?mid=<?php echo $value['userid'];?>">修改</a>&nbsp;<a class="btn btn-danger" href= "delUsers.php?id=<?php echo $value['userid'];?>">删除</a></td>
 							</tr>
 						<?php
 							}
 						}
 						?>
 						</tbody>
						<tfoot>
							<td></td>
							<td></td>
						<td><?php echo "本站共有&nbsp;".$total."&nbsp;条记录&nbsp;";?></td>
						<td>
						<?php
						echo "每页显示&nbsp;".$size."&nbsp;条&nbsp;";
						?>
						</td>
								<td><?php echo "第&nbsp;".$page_id."&nbsp;页/共&nbsp;".$page_num."&nbsp;页&nbsp;";?></td>
								<td></td>
								
								<td>
									<input class="btn btn-primary" type="submit" value="删除所选用户" class="buttoncss" style="float:left; margin-right:80px;" />
									</form>
								</td>
								<td>
									<?php
									
									if($page_id>1 && $page_num>1){
									echo "<a class='btn btn-info' href=?page_id=".($page_id-1).">上一页&nbsp;&nbsp;</a>";
									}
									if($page_id>=1 && $page_num>$page_id){
									echo "<a class='btn btn-info' href=?page_id=".($page_id+1).">下一页&nbsp;&nbsp;</a>";
									}
									?>
								</td>
								
						</tfoot>
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
