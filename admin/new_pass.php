<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
 
  <form method="post">
    <h1>  Tạo mật khẩu mới </h1>
    	
      <input  required="required" type="text" name="ma" />  
      <input type="submit" name="ok" />
    </form>
    <?php 
	
	if(isset($_POST['ok'])){
		include('../config/connect.php');
		
		$ma=$_POST['ma'];
		if($ma==""){echo  "nhap mat khau";}else{
		$user_id = $_GET['id'];
		
		//$sql = "UPDATE `user` SET `user_pass`= '$ma' WHERE `user_id`= $user_id" ;
		$sql = "UPDATE `user` SET `user_pass`= '$ma' WHERE `user_id`= $user_id" ;
		
		$query = mysqli_query ( $conn , $sql) ;
		header ("location:index.php");
		
		
			 
		}
		
		}
	
	?>
   
</body>


</html>