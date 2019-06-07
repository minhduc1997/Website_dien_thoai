<?php
$db_host ="localhost";	
$db_user="root";
$db_pass="";
$db_database="`vietpro_mobile_shop`";
$conn =mysqli_connect($db_host,$db_user,$db_pass,$db_database)or die("Không thể kết nối cơ sở dữ liệu ".mysqli_connect_error());
$con=mysqli_query($conn,"SET NAMES 'utf8'");
