<?php 
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

<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>


<body>

<form method="post">
<input required name="email" type="text">
<input name="ok" type="submit">
</form>

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
                   echo '<script>alert("Message sent!");</script>';
				   header ('location:insert_code.php');
                }
		}
		
		else {
			
			echo "tai khoan khong hop le"; exit();}
		}		
		
		
		 
		// lay du lieu usermail
		
		





















//truy van usermail
/*


$query=mysqli_query($conn,"select * from  user where user_mail= '$user_mail' ");

$num = mysqli_num_rows($query);
if ($num==1){
	
}

else {
	
	echo "tai khoan khong hop le";}
}
*/

?>
</body>
</html>