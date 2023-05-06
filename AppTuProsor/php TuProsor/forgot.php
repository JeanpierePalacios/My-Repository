<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'PHPMailer/class.phpmailer.php';
	require 'PHPMailer/class.smtp.php';
	require 'admin.php';
	$con = mysqli_connect("localhost:3308", "root", "", "usuarios");
	$correo = $_POST["correo"];
	$sql = "SELECT * FROM user WHERE correo = '$correo'";
	$query = mysqli_query($con,$sql);
	if(mysqli_num_rows($query)==1){
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
		$mail->Body = "Ingrese al siguiente link para restablecer contraseña: '.'http://localhost/ResetPass.php?key=$correo";
		
		if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$msg["mail"] = "send";
		echo json_encode($msg);
	}	
	} else{
		echo "Enter a Validate Email";
	}
?>