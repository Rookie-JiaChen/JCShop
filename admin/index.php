<!doctype html>
<html lang="zh" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body>
<div class="bg-back">
<ul class="shadows">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
<ul class="drive">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>	
</div>
	<div style="z-index: 10000;position: absolute;top: 0;left:calc(50% - 244px);"  class="cd-user-modal is-visible"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> 
			<ul class="cd-switcher">
				<li><a class="selected">账号密码登录</a></li>
				<!-- <li><a href="#0">验证码登录</a></li> -->
			</ul>
			<div id="cd-login" class=" is-selected"> <!-- log in form -->
				<form class="cd-form" action="checkLogin.php" method="post">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">账户名</label>
						<input class="full-width has-padding has-border"  type="text" name="adminname" placeholder="请输入账户名" required />
						<span class="cd-error-message">账户名错误</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">密码</label>
						<input class="full-width has-padding has-border"  type="password" name="adminpassword"  placeholder="请输入密码" required />
						<span class="cd-error-message">格式错误!</span>
						<!-- 	<a style="
							display: inline-block;
							position: absolute;
							right: 0px;
							cursor:pointer;
							bottom: -22px;
							font-size: 14px;
							color: #3277fc;">忘记密码?</a> -->
					</p>
				
					<p class="fieldset">
						<input class="full-width" name="ok" type="submit" value="登录" />
					</p>
				</form>
			</div> <!-- cd-login -->
		</div> <!-- cd-user-modal-container -->
		<p style="position: absolute;bottom: 6em;text-align: center;width: 100%;"> -Background for JCShop- </p>
	</div> <!-- cd-user-modal -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- <script src="js/main.js"></script> --> <!-- Gem jQuery -->
</body>
</html>