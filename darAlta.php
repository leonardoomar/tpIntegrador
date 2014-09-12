<?php
	@session_start();
	
	header('Content-Type: text/html; charset=UTF-8');
	
	if (isset($_POST['volver'])){
		$_SESSION['url']='darAlta';
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

