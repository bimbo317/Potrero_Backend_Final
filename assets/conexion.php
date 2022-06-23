<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
//$conexion = mysqli_connect("127.0.0.1", "root", "", null, "3366");
	$mysqli = new mysqli("localhost","root","", null, "3366");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	mysqli_select_db($mysqli, 'tiendapotrero');
?>