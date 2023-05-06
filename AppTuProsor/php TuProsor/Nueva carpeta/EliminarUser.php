<?php
	$con = mysqli_connect("localhost", "root", "", "usuarios");
	$correo = $_POST["correo"];
	$consulta = "DELETE FROM user WHERE correo = '".$correo."'";
	mysqli_query($con,$consulta) or die (mysqli_error());
	mysqli_close($con);
?>
