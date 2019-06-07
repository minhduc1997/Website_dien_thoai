<?php
session_start();


if(isset($_SESSION['user_name']  ) && isset($_SESSION['user_pass']  )){
	
	$id=$_GET['id'];
	$conn = mysqli_connect("localhost", "root", "", "`vietpro_mobile_shop`") or die("khong ket noi dc ");
	 $sql=" DELETE FROM `category` WHERE cat_id='$id'";
	 $query=mysqli_query($conn,$sql);
	
	}
	else {
			header('location:login.php');;
		}

 ?>