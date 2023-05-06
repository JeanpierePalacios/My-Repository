<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'PHPMailer/class.phpmailer.php';
	require 'PHPMailer/class.smtp.php';
	require_once 'config.php';
	require 'admin.php';
	$correo = 'julian.palacios040201@gmail.com';
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; 
	//Enter your sender email                              // Enable SMTP authentication
	$mail->Username = $admincorreo;                 // SMTP username
	$mail->Password = $adminpassword;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('TuProsorUNMSM@gmail.com', 'TuProsor');
	$mail->addAddress($correo);     // Add a recipient              // Name is optional

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
?>