
<?php
error_reporting(0);

 ob_start(); 
session_start();

echo  $_SESSION['abc'];
 ?>



<?php 
	if(isset($_SESSION['abc'])){
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
			 header ("location:login.php?page_layout=new_pass1&id=$row_id");			 
		 }
		 else 
		
			 $error= '<div class="alert alert-danger">Mã không hợp lệ !</div>';
		
		}
	}
	else{
		echo "Có Lỗi"; die();
		
		}
	?>

<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Nhập Mã</div>
				<div class="panel-body">
					<?php  echo $error;?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input  name="ma"  required class="form-control" placeholder="XN01"  type="text" autofocus>
							</div>
							
							
                          
							<button name="ok" type="submit" class="btn btn-primary">Đăng nhập</button>
      
  				</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
    
