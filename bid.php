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
    <h1 class="mt-4 mb-3">Bidding
        </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Bidding</li>
    </ol>
	<?php
	$r=select("SELECT * FROM `bidding` INNER JOIN product ON bidding.product_id=product.id where bidding.id='".$_REQUEST['id']."'");
	while($res=mysqli_fetch_array($r))
	{
		extract($res);
	
	?>
	  <span class="breadcrumb-item active">
       Product Name:<?=$product_name?>
      </span></br>
      <span >Product Type : <?=$product_type?>
     </span></br>
      <span>Bidding Price :<?=$price?> /-</span></br>
      <span>Contact Number :<?=$contact?></span></br>
    
<?php
	}
?>
</br>
    <div class="row">
      <div class="col-lg-8 mb-4">
         <form method="post"  >
         <div class="control-group form-group">
            <div class="controls">
             <input type="hidden" value="<?=$_SESSION['id']?>" name="userid">
			  <input type="hidden" value="<?=$_REQUEST['id']?>" name="bidding_id">
              <input type="text" class="form-control" id="email" name="pricet" Placeholder="Please enter your Bidding Price">
            </div>
          </div>
          
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="bid" >Bid</button>
        </form>
      </div>
<?php
if(isset($_REQUEST['bid']))
	{
		
	extract($_REQUEST);
	$valid=true;
	$query="INSERT INTO `bid_data`(`bidding_id`, `userid`, `price`) VALUES ('$bidding_id','$userid','$pricet')";
	

	$n=iud($query);
	//$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		
		
		echo"<script>alert(' Successful');
		 window.location='index.php';
		 </script>";
	}
	else
	{
		echo"<script>alert('Something Went Wrong');
		 window.location='index.php';
		 </script>";
	}
	
		
	}

?>
    </div>
    <!-- /.row -->

  </div>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
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
