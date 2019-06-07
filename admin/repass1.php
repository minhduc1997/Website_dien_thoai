<?php 
error_reporting(0);
define("T",true);

ob_start();
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/POP3.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


session_start();
/*
$timeout = 10; 
$session_name = "time"; 
if ( isset($_SESSION["{$session_name}"]) && ( $_SESSION["{$session_name}"] >= time() - $timeout ) ) 
{ 
echo "Vui lòng đợi sau $timeout giây nữa reply của bạn mới được chấp nhận."; exit();
}

 $_SESSION["{$session_name}"] = time();
 */  
?>


<?php
		if(isset($_POST['ok'])){
		
		include('../config/connect.php');
		
		$user_mail = $_POST['email'];
		
		$query=mysqli_query($conn,"select * from  user where user_mail= '$user_mail' ");
		
		$num = mysqli_num_rows($query);
		if ($num==1){
			echo  "hop  le";
			
			//funtion  tao ma	
		function rand_string( $length ) {
			
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		
		$size = strlen( $chars );
		
		for( $i = 0; $i < $length; $i++ ) {
			
		$str = substr( str_shuffle( $chars ), 0, $length );}
		
		return $str;}
		
		 $my_string = rand_string( 5 );
		 
		 //update ma vao database
		 mysqli_query($conn,"UPDATE `user` SET `re_pass`= '$my_string' WHERE user_mail = '$user_mail'");
		 
		 
		 //gui mail
				
				$mail = new PHPMailer();
				$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
						)
					);          

                $mail->isSMTP();
					
				

					
                $mail->Host = 'smtp.gmail.com';

                $mail->Port = 587;

                $mail->SMTPSecure = 'tls';

                $mail->SMTPAuth = true;

                $mail->SMTPDebug = 0;
				$mail->CharSet = 'UTF-8';

                $mail->Username = 'minhd2474@gmail.com';

                $mail->Password = 'minhduc681997';

                $mail->setFrom('minhd2474@gmail.com', 'Webmaster');

                $mail->addAddress($user_mail);

                $mail->Subject = ('Lấy lại mật khẩu');

                $mail->msgHTML("Mã của bạn là :".$my_string);

                if (!$mail->send()) {
                   $error = "Mailer Error: " . $mail->ErrorInfo;
                    ?><script>alert('<?php echo $error ?>');</script><?php
					
                } 
                else {
					$_SESSION['abc']=1;
                   echo '<script>alert("Message sent!");</script>';
				     
				   header ('location:login.php?page_layout=insert_code1');
				
                }
		}
		
		else {
			
			 $error= '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';}
		}		
		?>


<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Vietpro Mobile Shop - Administrator</div>
				<div class="panel-body">
					<?php  echo $error;?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input  name="email"  required class="form-control" placeholder="E-mail"  type="email" autofocus>
							</div>
							
							
                          
							<button name="ok" type="submit" class="btn btn-primary">Đăng nhập</button>
      
  				</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
    
