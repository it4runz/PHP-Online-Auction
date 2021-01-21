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
    <h1 class="mt-4 mb-3">View
        </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">view</li>
    </ol>

    <div class="row">
      <div class="col-lg-8 mb-4">
         <table class="table">
		 <tr style="font-weight:bold">
		 <td> Name</td>
		 <td>Mobile</td>
		 <td>Email</td>
		 <td>Price</td>
		 
		 </tr>
		 <?php
		 $res=select("SELECT * FROM `bid_data` INNER JOIN register on bid_data.userid=register.id
 WHERE bid_data.bidding_id='".$_REQUEST['id']."'");
		 while($rt=mysqli_fetch_array($res))
		 {
			 extract($rt);
		 ?>
		<tr>
		 <td><?=$name?></td>
		 <td><?=$mobile?></td>
		 <td><?=$email?></td>
		 <td><?=$price?></td>
</tr>
		 <?php
		 }
		 ?>
         </table>
      </div>
<?php
if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from register where email='$email' and password='$password'";
	
		
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		//$_SESSION['adminid']=$id;
		$_SESSION['name']=$name;
		$_SESSION['id']=$id;
		//$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		echo"<script>alert('Login Successful');
		 window.location='index.php';
		 </script>";
	}
	else
	{
		echo"<script>alert('Email Or Password Incorrect');
		 window.location='login.php';
		 </script>";
	}
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
