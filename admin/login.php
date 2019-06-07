<?php
error_reporting(0);
define("T",true);
session_start();
$page_layout=$_GET['page_layout'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vietpro Mobile Shop - Administrator</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
   <?php if(isset($_GET['page_layout'])){
		switch($_GET['page_layout']){
			case 'repass1': include_once('repass1.php');break;	
			case 'insert_code1': include_once('insert_code1.php');break;
			case 'new_pass1': include_once('new_pass1.php');break;
			
		}
	}
	else{
		include_once('login_con.php');
	}
	?>
    
	
</body>

</html>
