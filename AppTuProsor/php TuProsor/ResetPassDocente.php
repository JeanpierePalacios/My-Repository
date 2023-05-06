<?php
	$con = mysqli_connect("localhost:3308", "root", "", "usuarios");
	$correo = $_GET["key"];
	$sql = "SELECT * FROM docente WHERE correo = '$correo'";
	$query = mysqli_query($con,$sql);
	if(mysqli_num_rows($query)==1){
		if(isset($_POST["submit"])){
			$password = $_POST["password"];
			$cpassword = $_POST["cpassword"];
			if($password == "" && $cpassword == ""){
				echo "No ha ingresado datos";
			}else{
				if($password == $cpassword){
					$update = "UPDATE docente SET password = '$password' WHERE correo = '$correo'";
					if(mysqli_query($con, $update)){
						echo "<h3> Contraseña restablecida exitosamente !!! Por favor ingrese a TuProsor </h3>";
					}else{
						echo "Error al restablecer contraseña, reingrese al link de su correo";
					}
				}else{
					echo "Las contraseñas ingresadas no coinciden";
				}
			}
		}else{
			echo "Apriete el boton para restablecer su contraseña";
		}
	}
?>

<!DOCTYPE html>
<html>
<html>
	<title>Forgot Password</title>
</head>
<body>
	<form action = "" method = "POST">
		<h1><?php echo "Bienvenido " . $correo?></h1>
		Ingrese Contraseña: <input type = "text" name = "password"> <br>
		Confirmar Contraseña: <input type = "text" name = "cpassword"> <br>
		<input type = "submit" name = "submit">
	</form>

</body>
</html>
	