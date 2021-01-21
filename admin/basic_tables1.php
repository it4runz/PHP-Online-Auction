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
<title> Auction System</title>
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
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include"sidebar.php";?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>View Prodcut Details</h3>
  	
   
    <?php
	/*$res=select("select * from reister order by id desc");
$n=mysqli_num_rows($res);
if(!$n>=1)
{
echo"<h3>No Data Available</h3>";	
}
else
{*/
		?>
    
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
	<th class="th-sm">S.no.
      </th>
      <th class="th-sm">Product Name
      </th>
      <th class="th-sm">Product Type
      </th>
      <th class="th-sm">Image
      </th>
	  <th class="th-sm">Contact Number
      </th>
      
      <th class="th-sm">discription
      </th>
	  <th class="th-sm">Operation
      </th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
  $result=select("select * from product");
  $n=1;
  while($r=mysqli_fetch_array($result))
  {  extract($r);
  ?>
    <tr>
      <td><?=$n?></td>
      <td><?=ucwords($product_name)?></td>
      <td><?=ucwords($product_type)?></td>
       <td><img src="../images/<?=$image?>" style="height:40px"></td>
     
	  <td><?=ucwords($contact)?></td>
	  <td><?=ucwords($description)?></td>
      <td>
         
    <a href="deletebook.php?id=<?=$id?>">
    <span class="glyphicon glyphicon-remove"></span>
    </a>
	</td>
    </tr>
    
    <?php
	$n++;
  }
	?>
    
    
    </tbody>

</table>
    </div><!-- /.table-responsive -->
    
  </div>
  <?php
//}
  ?>
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
