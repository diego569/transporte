<?php
	$conexion = new mysqli('localhost','root','', 'transporte')	
		;
	if ($conexion->connect_errno){
		echo "Fallo al conectar a MySQL: (" . $conexion->
			connect_errno . ") " . $conexion->connect_error;
	}
?>