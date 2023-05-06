<?php
    $con = mysqli_connect("localhost", "root", "", "usuarios");
    
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"]; 
	$hora = $_POST["hora"];
	$enlace = $_POST["enlace"]; 
    $imgResource = $_POST["imgResource"];
	$path = "imagenes/$titulo.jpg";
	$actualpath = "http://localhost/$path";
	file_put_contents($path,base64_decode($imgResource));
	$bytesArchivo = file_get_contents($path);
    $statement = mysqli_prepare($con, "INSERT INTO items (titulo, descripcion, fecha, hora, enlace, imgResource) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssssss", $titulo, $descripcion, $fecha, $hora, $enlace, $actualpath);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>