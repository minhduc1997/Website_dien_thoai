<?php
session_start();
 if(isset($_SESSION['cart'])){
	 echo "asdasda";
	 
	 $prd_id = $_GET['prd_id'];
	 
	 unset($_SESSION['cart'][$prd_id]);

	header ("location:../../index.php?page_layout=cart");
	 
	 }
 

 ?>