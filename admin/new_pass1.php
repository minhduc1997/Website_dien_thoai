<?php
error_reporting(0);

if(!defined("T")){
	echo  "Bạn không có quyền truy cập vào trang này";
	}
	echo "easđ".$_SESSION['abc'];
	
	session_start();

?>



    <?php 
	if(isset($_SESSION['abc'])){
	if(isset($_POST['ok'])){
		include('../config/connect.php');
		
		$ma=$_POST['ma'];
		if($ma=="" ){
		$error= '<div class="alert alert-danger">Mật khẩu phải từ 6 kí tự trở lên</div>';

			}else{
		$user_id = $_GET['id'];
		
		//$sql = "UPDATE `user` SET `user_pass`= '$ma' WHERE `user_id`= $user_id" ;
		$sql = "UPDATE `user` SET `user_pass`= '$ma' WHERE `user_id`= $user_id" ;
		
		$query = mysqli_query ( $conn , $sql) ;
		unset ($_SESSION['abc']);
		?>
        
		<script>confirm("Bạn muốn xóa sản phẩm này ?")</script>
        <?php 
		header ("location:index.php");
		
		
			 
		}
		
		}
	}
	else 
	{
		
		echo "Có Lỗi";
		die();
		
		}
	?>
   


<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Tạo mật khẩu mới</div>
				<div class="panel-body">
					<?php if(isset
					
					($error)) echo $error;?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input  name="ma"  required class="form-control" placeholder="abc12345"  type="text" autofocus>
							</div>
							
							</div>
                          
							<button name="ok" type="submit" class="btn btn-primary">Tạo mới</button>
      
  				</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
    
	
