<?php
require_once"dbconfig.php";
if(isset($_SESSION['adminlogin']))
{
	
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Auction System </title>
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
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>View Product Type</h3>
  	
   
    <?php
	$res=select("select * from product_type");
$n=mysqli_num_rows($res);
if(!$n>=1)
{
echo"<h3>No Data Available</h3>";	
}
else
{
		?>
    
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Product Name</th>
            <th>Delete</th>
             </tr>
        </thead>
        <tbody>
		
		<?php
		$p=1;
		while($t=mysqli_fetch_array($res))
		{extract($t);
		
		?>
		      <tr>
            <th scope="row"><?=$p?>.</th>
            <td><?=ucwords($t[1])?></td>
            <td><a href="deletecast.php?id=<?=$id?>"><button class="btn btn-success">Delete</button></a></td>
            
          </tr>
         <?php
		 $p++;
		}
		 ?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
    
  </div>
  <?php
}
  ?>
  </div>
  <?php
  include"footer.php";
  ?>
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
