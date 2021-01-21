<?php
require_once"dbconfig.php";
$bookid=$_REQUEST['id'];
$n=iud("DELETE FROM `product` WHERE id='$bookid'");
if($n==1)
{
	echo"<script>alert('Delete Successful');
		 window.location='basic_tables1.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='basic_tables1.php';
		 </script>";
}
	
?>