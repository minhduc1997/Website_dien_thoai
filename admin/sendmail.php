<?php


require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/POP3.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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

                $mail->Username = 'minhd2474@gmail.com';

                $mail->Password = 'minhduc681997';

                $mail->setFrom('minhd2474@gmail.com', 'Webmaster');

                $mail->addAddress('ducltvweb@gmail.com');

                $mail->Subject = 'sadasdsdasdas';

                $mail->msgHTML('sadasdasdasd');

                if (!$mail->send()) {
                   $error = "Mailer Error: " . $mail->ErrorInfo;
                    ?><script>alert('<?php echo $error ?>');</script><?php
                } 
                else {
                   echo '<script>alert("Message sent!");</script>';
                }


?>