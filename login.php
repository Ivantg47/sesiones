<?php
//conexion a la bd

include ('conexion.php');

//Recibe usuario y contraseña para validar
$usuario = strip_tags($_POST['usuario']);
$contrasena = hash("sha256",strip_tags($_POST['contrasena']));

//ejecuta consilta bd
$consulta = "SELECT usuario, contrasena from usuario where usuario='".$usuario."'";
$resultado = pg_query($con,$consulta);
$resultado = pg_fetch_assoc($resultado);
$miusuario = $resultado['usuario'];
$micontrasena = substr($resultado['contrasena'], 2);


if ($usuario == $miusuario && $contrasena == $micontrasena) {
	//echo "coincide";
	//se crea sesion
	session_start();
	//asignar variable de sesion: id autenticacion exitosa
	$_SESSION['valida']=true;
	//redirecciopnar menu.php
	header('Location: menu.php');	

} else {
	echo "error";
	//retornar index con error
	//header('Location: index.php?error=1');
} 
?>

