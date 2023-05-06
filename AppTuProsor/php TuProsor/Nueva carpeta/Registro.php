<?php
    $con = mysqli_connect("localhost", "root", "", "usuarios");
    
    $nombres = $_POST["nombres"];
    $nacimiento = $_POST["nacimiento"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO user (nombres, nacimiento, correo, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $nombres, $nacimiento, $correo, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>