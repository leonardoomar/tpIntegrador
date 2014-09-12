<?php
@session_start();
/*
	ob_start();
	session_start();
	$error = ob_get_clean();
	 
	if(!empty($error)){
		echo 'Ya existe una sesión.daralta<br />';
	}else{
		echo 'Sesión creada.daralta<br />';
	}
	
*/
	header('Content-Type: text/html; charset=UTF-8');
	
/*
	if (!isset($_SESSION['usuario']))
    {
		session_destroy();
		unset($_session);
		header("Location: login.php");
		die();
	}
*/
	
	if (isset($_POST['volver'])){
		header("Location: controlador.php");
		die();
	}
	
?>
<h2>Menu dar de alta cliente</h2>
<form action='alta.php' method='POST'>
	<fieldset>
		Nombre: <input type='text' name='nombre'/>
		Apellido: <input type='text' name='apellido'/>
		Edad: <input type='int'	name='edad'/>
		<input type='submit' value='Aceptar'/>
	</fieldset>
</form>

<form action="" method="POST">
	<input type='submit' name='volver' value='Volver al menu' />
</form>

