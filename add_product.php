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
    <h1 class="mt-4 mb-3">Add Product
        </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Add Product</li>
    </ol>

    <div class="row">
      <div class="col-lg-8 mb-4">
        <form method="post"  enctype="multipart/form-data">
          <div class="control-group form-group">
            <div class="controls">
              <label>Product Name:</label>
              <input type="text" class="form-control" id="name" name="product_name" >
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Product Type</label>
              <select class="form-control" id="phone" name="product_type">
			  <?php
			  $t=select("select * from product_type");
			  while($res=mysqli_fetch_array($t))
			  {
				  extract($res);
			  ?>
			  <option value="<?=$product_type_name?>"><?=ucwords($product_type_name)?></option>
			  <?php
			  }
			  ?>
			  </select>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Contact Number</label>
              <input type="text" class="form-control" id="email" name="mobile" >
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Product Description</label>
              <textarea class="form-control" id="password" name="description" ></textarea>
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label>Product Image</label>
              <input type="file" name="myfile" class="form-control">
            </div>
          </div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="Add_Product" >Add Product</button>
        </form>
      </div>
	  <?php
if(isset($_REQUEST['Add_Product']))
{
$id=$_SESSION['id'];
extract($_REQUEST);
$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
$n=iud("INSERT INTO `product`( `product_name`, `product_type`, `description`, `userid`, `image`, `contact`) VALUES  ('$product_name', '$product_type', '$description', '$id', '$name','$mobile')");
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
else
{
	echo"<script>alert('Image Not Uploaded');
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
