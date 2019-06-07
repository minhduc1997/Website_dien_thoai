 <?php
	
	include 'facebook/config.php';

// Include User class
include'facebook/User.class.php';
 $permissions = ['email']; // Optional permissions
    $loginURL = $helper->getLoginUrl(FB_REDIRECT_URL, $permissions);
    
    // Render Facebook login button
    $output = htmlspecialchars($loginURL);
	
	include("../config/connect.php");
	
	
	if(isset($_POST['ok']))
	{
		$user_name = $_POST['user_mail'];
		$user_pass = $_POST['user_pass'];
		
		$sql="select  * from user where user_mail ='$user_name' AND user_pass='$user_pass' ";
		$query=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($query);
		echo $num;
	if($num>0){
		 if (isset($_POST['remember'])) {
            setcookie('user', $user_name, time() + 6, '/', '', 0, 0);
            setcookie('pass', $user_pass, time() + 6, '/', '', 0, 0);
        }
		$_SESSION['user_name'] = $user_name;
		echo $_SESSION['user_name'];
		$_SESSION['user_pass'] = $user_pass;
		header("location:index.php");
		
		
		
		}	
		
		else{
			$error= '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
			
			}
		}

	 ?>
     
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Vietpro Mobile Shop - Administrator</div>
				<div class="panel-body">
					<?php if(isset
					
					($error)) echo $error;?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input  name="user_mail"  required class="form-control" placeholder="E-mail"  type="email" autofocus>
							</div>
							<div class="form-group">
								<input name="user_pass"  required class="form-control" placeholder="Mật khẩu"  type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input  name="remember" type="checkbox" value="Remember Me" <?php if(isset($_COOKIE['user'])){echo 'checked';} ?>>Nhớ tài khoản
								</label>
							</div>
                          
							<button name="ok" type="submit" class="btn btn-primary">Đăng nhập</button>
                            <a href="<?php echo $output ?>"> <img width="200px" height="62px" src="img/facebook-sign-in-button-png-26.png"></a>
      						<a  href="login.php?page_layout=repass1">Get pass</a>
  				</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	