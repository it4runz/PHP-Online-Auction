<?php
Require_once"dbconfig.php";

$u=iud("delete from product_type where id='".$_REQUEST['id']."'");
if($u==1)
{
	echo"<script>alert('Successful');
	window.location='view.php';</script>";
}
else
{
	echo"<script>alert('Something Wrong');
	window.location='view.php';</script>";
}
?>