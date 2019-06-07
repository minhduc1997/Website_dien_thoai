<?php
session_start();
if(!defined("T")){
	header("location:login.php");
	}

if(isset($_SESSION['user_name']  ) && isset($_SESSION['user_pass']  )){
	
	$id=$_GET['id'];
	$conn = mysqli_connect("localhost", "root", "", "`vietpro_mobile_shop`") or die("khong ket noi dc ");
	 $sql=" DELETE FROM `product` WHERE prd_id='$id'";
	 $query=mysqli_query($conn,$sql);
	 header("location:index.php?page_layout=product");
	
	}
	else {
			header('location:login.php');;
		}

 ?>