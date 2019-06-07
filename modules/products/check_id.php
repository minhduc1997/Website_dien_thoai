<?php
session_start();
$prd_id=$_GET['prd_id'];
if($prd_id == $_SESSION['id']){
	$_SESSION['abc1']= "abc";
	
	}
	header('location:../../index.php?page_layout=product');




 ?>