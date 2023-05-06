<?php
//require_once 'config.php';
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
require 'admin.php';
$correo = 'julian.palacios040201@gmail.com';

/*$sql = "SELECT * FROM user WHERE correo = ?");

$check = mysql_query($con,$sql);
if($check){*/
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true; 
//Ingreso del correo
$mail->Username = $admincorreo;
$mail->Password = $adminpassword;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('tuprosorunmsm@gmail.com','TuProsor');
$mail->addAddress($correo);            
$mail->addReplyTo('tuprosorunmsm@gmail.com','TuProsor');

$mail->Subject = 'Forgot Password For TuProsor';
$mail->Body = 'Ingrese al siguiente link para restablecer contraseña: '.'http://localhost/ResetPass.php';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>