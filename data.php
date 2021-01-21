<?php require_once"dbconfig.php";
extract($_REQUEST);
?>

<div class="row" >
	<?php
	$as=select("SELECT * FROM `bidding` INNER JOIN product ON bidding.product_id=product.id
WHERE  product.product_name LIKE '%$text%' or product.product_type LIKE '%$text%'");
	$num=mysqli_num_rows($as);
	if($num>=1)
	{
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
	}
	else
	{
		echo"<h1 style='text-align:center;background-color:skyblue'>No Data Found</h1>";
	}
	 ?> 
     
	  
    </div>