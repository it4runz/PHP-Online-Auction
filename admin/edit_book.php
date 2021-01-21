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
        <div class="graphs">
	     <div class="xs">
  	       <h3> Update Book Details </h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" action="myphp.php">
								<form class="form-horizontal" action="myphp.php" method="post" enctype="multipart/form-data"> 
<?php
$result=select("select * from books where bookid='".$_REQUEST['id']."'");
while($r=mysqli_fetch_array($result))
{extract($r);
?>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">ISBN</label> 
<div class="col-xs-6"> 
<input type="hidden" value="<?=$bookid?>" class="form-control"  name='uid' placeholder="Title"> 
<input type="text" value="<?=$isbn?>" class="form-control"  name='uisbn' placeholder="Title"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Title</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$Title?>" class="form-control"  name='utitle' placeholder="Title"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errormetakey" class="col-sm-2 control-label">Author</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$Author?>" class="form-control" name='uauthor' placeholder="Keyword"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errormetakey" class="col-sm-2 control-label">Rating</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$book_rating?>" class="form-control" name='urating' placeholder="Rating"> 
</div>
</div>
<div class="form-group"> 
<label for="inputEmail3" id="errormetadis" class="col-sm-2 control-label">Publisher</label> 
<div class="col-xs-6">
<input type="text" value="<?=$publisher?>" class="form-control"  name="upublisher" placeholder="discription"> 
</div> 
</div>
<div class="form-group"> 
<label for="inputEmail3" id="image" class="col-sm-2 control-label">Cover Image</label> 
<div class="col-xs-6">
<input type="file" class="form-control col-xs-4"  name="uimage" > 
</div> 
</div>

<div class="form-group"> 
<label for="inputEmail3" id="image" class="col-sm-2 control-label">Price</label> 
<div class="col-xs-6">
<input type="text" class="form-control col-xs-4"  value="<?=$price?> " name="uprice" > 
</div> 
</div>



<div class="form-group"> 
<label for="inputEmail3" id="cpassworderror" class="col-sm-2 control-label">Project discription</label> 
<div class="col-xs-6">
<textarea name="udiscription" class="form-control col-xs-4">
<?=$discription?>
</textarea>
 </div>
 </div>
<div class="col-sm-6"> 
<center><input type="submit" class="btn btn-info" name="Update_book" id="project_submit" value="Update_book"></center> </div> </form> 
</div>
<?php

}
?>

						</div>
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
