<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta Empleados</h1>
    	<input type="text" name="dni" placeholder="Numero Registro">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="email" name="email" placeholder="E-mail">
    	<input type="text" name="contraseña" placeholder="Contraseña">
    	<input type="submit" name="registrarse">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>