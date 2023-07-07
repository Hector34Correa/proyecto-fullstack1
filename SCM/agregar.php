<?php

include "conexion.php";

if($_POST)
{
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$contraseña=$_POST['contraseña'];
	$fecha_registro=$_POST['fecha_registro'];
	$descripcion=$_POST['descripcion'];
	$nivel=$_POST['nivel'];
	$rol=$_POST['rol'];
	
	$sql="INSERT INTO `usuarios`(`nombre`, `telefono`, `correo`, `contraseña`, `fecha_registro`, `descripcion`, `nivel`, `rol`) VALUES ('".$nombre."','".$telefono."','".$correo."','".$contraseña."','".$fecha_registro."','".$descripcion."','".$nivel."','".$rol."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['nombre'] = $nombre;
		header('Location: adentro.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	
	}
?>