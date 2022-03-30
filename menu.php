
	//verificar si existe una sesion
<?php
	session_start();
echo "hola1";
	if (isset($_SESSION['valida']) && $_SESSION['valida'] == true){
		<html>
			<header>
					<meta charset="utf-8">
	
					<title>Menu principal</title>
			</header>
			<body>
				<p>Esto debe verse solo si el usuario y contraseña son validos</p>
				<form name="salir" action="salir.php" method="post">
					<input type="Submit" name="salir" value="salir">
				</form>
			</body>
		</html>
echo "hola";
	} else {

		header('Location: index.php');

	}

?>