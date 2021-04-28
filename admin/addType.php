
<!DOCTYPE HTML>
<html>
<head>
<title>添加商品类别</title>
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
 ?>
<body>
<div id="wrapper">
     <!-- Navigation -->
       
		<div id="page-wrapper">
        <div class="col-md-12 graphs" style="min-height: 920px;">
	   <div class="xs">
  	    <h3>添加商品类别</h3>
  	    <div class="well1 white">
        <form action="saveType.php" method="post"  class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" >
          <fieldset>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">类别名称</label>
              <input type="text" name="typename"  class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">类别描述</label>
              <input type="text" name="typedes" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="">
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
