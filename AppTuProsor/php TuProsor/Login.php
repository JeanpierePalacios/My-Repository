<?php
    $con = mysqli_connect("localhost:3308", "root", "", "usuarios");
    
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE correo = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $correo, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $nombres, $nacimiento, $correo, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["nombres"] = $nombres;
        $response["nacimiento"] = $nacimiento;
        $response["correo"] = $correo;
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>