<?php 
	//conexion al manejador de base de datos
//echo "Intentar la conexion";
	$con = pg_connect("dbname=sesion user=usuario2 password=hola1234 port=5432") or die (pg_last_error());
//var_dump($con);

 ?>
