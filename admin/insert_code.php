<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


    <form method="post">
    <h1>  Nhập Mã để lấy mật khẩu</h1>
      <input type="text" name="ma" />  
      <input type="submit" name="ok" />
    </form>
    
    <?php 
	
	if(isset($_POST['ok'])){
		include('../config/connect.php');
		$ma=$_POST['ma'];
		
		$sql = " select * from  user where re_pass = '$ma'" ;
		
		$query = mysqli_query ( $conn,$sql) ;
		
		$row=mysqli_fetch_array($query);
		
		$row_id=$row['user_id'];
		
		$num =  mysqli_num_rows ($query) ;
		
		 if($num==1){
			 echo "mã đúng  ";
			 header ("location:new_pass.php?id=$row_id");			 
		 }
		 else  echo "Bạn nhập sai mã ";
		
		}
	
	?>
</body>
</html>