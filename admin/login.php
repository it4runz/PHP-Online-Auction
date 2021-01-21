<?php
require_once"dbconfig.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title> Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.php">Only Admin Can Login</a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post" action="myphp.php">
		<input type="text" class="text" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit"  name="login" value="Login"></div>
		
		
	</form>
	
	
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2019 Auction System. All Rights Reserved. <a href="#" target="_blank"></a> </p>
   </div>
</body>
</html>
