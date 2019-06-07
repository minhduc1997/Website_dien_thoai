<?php
session_start();
define('T', true);
include_once("../config/connect.php");

if(isset($_SESSION['user_name']  ) && isset($_SESSION['user_pass']  )){
	include_once("admin.php");
	
	}
	else {
			include_once("login.php");
		}

 ?>