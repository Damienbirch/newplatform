<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = ''; 
$mail->SMTPAuth = true;
$mail->Username = 'DamsMedia';
$mail->Password = 'awoyodedoyinmola70@gmail.com'; 
$mail->SMTPSecure = '';
$mail->Port = 587;

$mail->setFrom('awoyodedoyinmola70@gmail.com', 'Awoyode Doyinmola');


$userEmail = $_POST['email'];

$recoveryCode = generateRecoveryCode();


$mail->addAddress($userEmail);

$mail->isHTML(true);
$mail->Subject = 'Password Recovery Code';
$mail->Body = 'Your recovery code is: ' . $recoveryCode;

if ($mail->send()) {
  
    echo 'Recovery code sent to your email. Please check your inbox.';
} else {

    echo 'Error sending Password Reocovery Code. Please try again later.';
}


function generateRecoveryCode($length = 6) {
    $characters = '0123456789';
    $recoveryCode = '';

    for ($i = 0; $i < $length; $i++) {
        $recoveryCode .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $recoveryCode;
}
?>
