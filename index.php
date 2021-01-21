<?php
 $dd=date("Y-m-d");
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
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include"nav.php";?>

  <div class="container">
 <h1 class="mt-4 mb-3">
        </h1>

    <ol class="breadcrumb">
	<input type="text" class="form-control" id="search" placeholder="What You Looking For..?">
      
     </ol>
    <div id="r">
	</div>
    <!-- Marketing Icons Section -->
    <div class="row" id="pep">
	<?php
	//echo $date=date('y-m-d');
	$as=select("SELECT * FROM `bidding` INNER JOIN product ON bidding.product_id=product.id where bidding.date_start='".$dd."' or bidding.date_end='".$dd."'");
	while($t=mysqli_fetch_array($as))
	{
		extract($t);
	?>
	<?php
if(isset($_SESSION['login']))
{
	?>
	<a href="bid.php?id=<?=$t[0]?>" style="text-decoration:none;color:black">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?=ucwords($product_name)?></h4>
          <div class="card-body">
		  <h6 class="card-header"><?=ucwords($product_type)?></h6>
          <img class="card-img-top" src="images/<?=$image?>" alt="">
           <p class="card-text"><?=$description?></p>
          </div>
        </div>
      </div>
	  </a>
	<?php
}
else
{
	?>
	<a href="login.php" style="text-decoration:none;color:black">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?=ucwords($product_name)?></h4>
          <div class="card-body">
		  <h6 class="card-header"><?=ucwords($product_type)?></h6>
          <img class="card-img-top" src="images/<?=$image?>" alt="">
           <p class="card-text"><?=$description?></p>
          </div>
        </div>
      </div>
	  </a>
	<?php
}
	?>
	
     <?php
	}
	 ?> 
     
	  
    </div>
    <!-- /.row -->

    
    <!-- Features Section -->
   

    <hr>

    <!-- Call to Action Section -->
   

  </div>
  </br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
	$("#search").keyup(function(){
		var text=$(this).val();
		
		$.ajax({
        url: "data.php",
		data: {text:text},
        success: function(res){
			
    $("#pep").hide();
    $("#r").html(res);
  }
});
		
	});
});
</script>
</body>

</html>
