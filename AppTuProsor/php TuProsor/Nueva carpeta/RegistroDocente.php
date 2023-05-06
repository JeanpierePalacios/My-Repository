<?php
    $con = mysqli_connect("localhost", "root", "", "usuarios");
    
    $nombres = $_POST["nombres"];
    $correo = $_POST["correo"];
	$dni = $_POST["dni"];
	$celular = $_POST["celular"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO docente (nombres, correo, dni, celular, password) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssiis", $nombres, $correo, $dni, $celular, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>