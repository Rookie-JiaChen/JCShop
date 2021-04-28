
<!DOCTYPE HTML>
<html>
<head>
<title>添加商品</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
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
<?php include "header_left.php";
 include_once "../include/jc_type.php";
 ?>
<body>
<div id="wrapper">
     <!-- Navigation -->
       
		<div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>添加商品</h3>
  	    <div class="well1 white">
        <form action="saveGoods.php" method="post"  class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">商品名称</label>
              <input type="text" name="goodsname"  class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">商品号</label>
              <input type="text" name="norms" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="">
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">商品类型</label>
              <select name="type" class="form-control1 ng-invalid ng-invalid-required">
				  <?php 
					  $rs = findType();	//返回结果集
					  for($i=0;$i<count($rs);$i++){	//循环打印出字段值
						echo "<option value=".$rs[$i]['typeid'].">".$rs[$i]['typename']."</option>";	
					  }
				  ?>
			  </select>
				  
            </div>
			
			
            <div class="form-group" style="width: 60%;">
              <label class="control-label">规格</label>
              <input type="text" name="size"  class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">分期</label>
              <input type="text" name="installment"  class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched"  required="">
            </div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label normal">生产日期</label>
			  <input type="date" name="prodate"  class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required>
				
			</div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">商品价格</label>
			  <input type="text" name="goodsprice"  class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="例: 100.00元"  required>
			</div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">折扣</label>
			  <input type="text" name="discount"  class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="例: 0.8"  required>
			</div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">商品图片</label>
			  <input type="file" name="file" class="form-control1 ng-invalid ng-invalid-required ng-touched" />
			</div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">商品简介</label>
			  <textarea name="introduction" class="form-control1 ng-invalid ng-invalid-required ng-touched" required></textarea>
			</div>
            <div class="form-group">
              <div class="checkbox1">
                <label>是否推荐</label>
				 <input type="radio" name="recommend" value="1" checked="checked"  required class="ng-invalid ng-invalid-required">是
				  <input type="radio" name="recommend" value="0" required class="ng-invalid ng-invalid-required">否
              </div>
			  <div class="checkbox1">
			    <label>是否新品</label>
			  		<input type="radio" name="newgoods" value="1" checked="checked"  required class="ng-invalid ng-invalid-required">是
			  		<input type="radio" name="newgoods" value="0"  required class="ng-invalid ng-invalid-required">否
			  </div>
            </div>

            <div class="form-group">
              <button type="submit" name="ok" class="btn btn-primary">提交</button>
              <button type="reset" class="btn btn-default">重写</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="copy_layout">
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
