<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Action System </title>
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include"nav.php";?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Register
        </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Register</li>
    </ol>

    <div class="row">
      <div class="col-lg-8 mb-4">
        <form name="sentMessage" method="post"  novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mobile Number:</label>
              <input type="tel" class="form-control" id="phone" name="mobile" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Password:</label>
              <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your Password.">
            </div>
          </div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="register" >Register</button>
        </form>
      </div>
	  <?php
if(isset($_REQUEST['register']))
{
//$cartid=$_REQUEST['id'];
extract($_REQUEST);
$n=iud("INSERT INTO `register`(`name`, `email`, `mobile`, `password`) VALUES ('$name', '$email', '$mobile', '$password')");
if($n==1)
{
	echo"<script>alert('Registration Successful');
		 window.location='login.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 </script>";
}
}		
	?>  
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
