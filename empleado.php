<?php 

include("con_db.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
		$dni = trim($_POST['dni']);
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$email = trim($_POST['email']);
	    $contraseña = trim($_POST['contraseña']);
	    $consulta = "INSERT INTO datos(dni, nombre, apellido, email, contraseña) 
		VALUES ('$dni','$nombre','$apellido','$email','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has Registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>