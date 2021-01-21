<?php
require_once"dbconfig.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Auction System | Admin</title>
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
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include"sidebar.php";?>
       
	   <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3> Add Product Type </h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" >
								<form class="form-horizontal"  method="post" enctype="multipart/form-data"> 
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Product type</label> 
<div class="col-xs-6"> 
<input type="text" class="form-control" id="isbn" name='product_type' placeholder="Product Type "> 
</div>
</div>

<div class="col-xs-6"> 
<center><input type="submit" class="btn btn-info" name="book_submit" id="book_submit" value="SUBMIT"></center> </div> </form>
					
<?php
if(isset($_REQUEST['book_submit']))
{
	extract($_REQUEST);
	$n=iud("insert into product_type(`product_type_name`) values ('$product_type')");
	if($n==1)
	{
		echo"<script>alert('Successful');
		window.location='view.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Something Went Wrong');
		window.location='view.php';
		</script>";
	}
}
?>					</div>
					</div>
					</br>
					</br>
					</br>
					</br>
					
  
	
  </div>
  <div class="copy_layout">
      <p>Copyright © 2019 Auction System. All Rights Reserved.<a href="#" target="_blank"></a> </p>
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
