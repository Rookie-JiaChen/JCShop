
<!DOCTYPE HTML>
<html>
<head>
<title>修改用户</title>
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
 include_once "../include/jc_user.php";

 $id=$_GET["mid"];
 $users = findUserByUserid($id); //调用数据库访问层方法
 ?>
<body>
<div id="wrapper">
     <!-- Navigation -->
       
		<div id="page-wrapper">
        <div class="col-md-12 graphs" style="min-height: 920px;">
	   <div class="xs">
  	    <h3>修改用户</h3>
  	    <div class="well1 white">
        <form action="saveChangeUsers.php?id=<?php echo $_GET["mid"];?>" method="post"  class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">用户名</label>
              <input type="text" name="username" value="<?php echo $users["username"];?>" readonly class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required>
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">密码</label>
              <input type="password" name="password" value="<?php echo $users["password"];?>" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required>
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">联系电话</label>
              <input type="tel" name="telephone" value="<?php echo $users["telephone"];?>" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required>
            </div>
            <div class="form-group" style="width: 60%;">
              <label class="control-label">联系地址</label>
              <input type="text" name="address" value="<?php echo $users["address"];?>" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number"  required>
            </div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">电子邮箱</label>
			  <input type="email" name="email" value="<?php echo $users["email"];?>" class="form-control1 ng-invalid ng-invalid-required ng-touched"   required>
			</div>
			<div class="form-group" style="width: 60%;">
			  <label class="control-label">注册时间</label>
			  <input type="text" name="regdate" value="<?php echo $users["regdate"];?>" readonly class="form-control1 ng-invalid ng-invalid-required ng-touched"   required>
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
