<?php
require_once"dbconfig.php";
//print_r($_SESSION);
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
    <h1 class="mt-4 mb-3">Start Bidding
        </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Start Bidding</li>
    </ol>

    <div class="row">
      <div class="col-lg-8 mb-4">
        <form method="post"  enctype="multipart/form-data">
         
          <div class="control-group form-group">
            <div class="controls">
              <label>Select Product </label>
              <select class="form-control" id="phone" name="product_id">
			  <?php
			  $t=select("select * from product where userid='".$_SESSION['id']."'");
			  while($res=mysqli_fetch_array($t))
			  {
				  extract($res);
			  ?>
			  <option value="<?=$id?>"><?=ucwords($product_name)?></option>
			  <?php
			  }
			  ?>
			  </select>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Price</label>
              <input type="text" class="form-control" id="" name="price" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Start Date</label>
              <input type="date" class="form-control" id="password" name="start_date" >
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label>End Date</label>
              <input type="date" class="form-control" name="end_date">
            </div>
          </div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="start_Product" >Start Product</button>
        </form>
      </div>
	  <?php
if(isset($_REQUEST['start_Product']))
{
$id=$_SESSION['id'];
extract($_REQUEST);

	
$n=iud("INSERT INTO `bidding`(`product_id`, `price`, `date_start`, `date_end`) VALUES ('$product_id', '$price', '$start_date', '$end_date')");
if($n==1)
{
	echo"<script>alert('Successful');
		 window.location='index.php';
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
