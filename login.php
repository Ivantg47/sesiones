<?php
//Recibe usuario y contraseña para validar
$usuario = strip_tags($_POST['usuario']);
$contrasena = strip_tags($_POST['contrasena']);
$miusuario = "itronco";
$micontrasena = "hola1234"; //sha256

if ($usuario == $miusuario && $contrasena == $micontrasena) {
	//echo "coincide";
	//redirecciopnar menu.php
	//asignar sesion
	//session_start();
	//asignar variable de sesion: id

} else {
	//echo "error";
	//retornar index con error
}
?>

//alta bd y usuario  id nombre apat amat coreo telef usua sha256|contraseña longitud varchar  