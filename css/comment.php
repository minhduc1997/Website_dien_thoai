<?php
if(!defined("T")){
	header("location:login.php");
	}
	
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = '`vietpro_mobile_shop`';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn){
    // thiết lập tiếng việt
    mysqli_query($conn, "SET NAMES 'utf8'");
}
else{
    die("Kết nối thất bại!").mysqli_connect_error();
}
echo  $prd_id=$_GET['prd_id'];

 ?>
 