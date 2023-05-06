<?php
	$arr=array();
	$con = mysqli_connect("localhost", "root", "", "usuarios");
	$consulta = "SELECT * FROM items";
	$resultado = mysqli_query($con,$consulta);
	while($registro=mysqli_fetch_array($resultado)){
		$result["titulo"]=$registro['titulo'];
		$result["descripcion"]=$registro['descripcion'];
		$result["fecha"]=$registro['fecha'];
		$result["hora"]=$registro['hora'];
		$result["enlace"]=$registro['enlace'];
		$result["imgResource"]=$registro['imgResource'];
		$arr['items'][]=$result;
	}
	mysqli_close($con);
	echo json_encode($arr);
?>
