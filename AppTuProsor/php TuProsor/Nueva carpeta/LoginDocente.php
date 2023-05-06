<?php
    $con = mysqli_connect("localhost", "root", "", "usuarios");
    
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM docente WHERE correo = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $correo, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $docente_id, $nombres, $correo, $dni, $celular, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["nombres"] = $nombres;
        $response["correo"] = $correo;
        $response["dni"] = $dni;
		$response["celular"] = $celular;
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>