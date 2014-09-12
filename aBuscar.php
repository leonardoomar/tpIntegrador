<?php
	session_start();
	
	if(!isset($_SESSION['usuario'])){
		require("sesiones.php");
	}
	header('Content-Type: text/html; charset=UTF-8');
	
	if (isset($_POST['volver'])){
		$_SESSION['url']='aBuscar';
		header("Location: controlador.php");
		die();
		
	}
	
?>

<h2>Menu Buscar cliente</h2>
<h5>- puede utilizar el caracter % como comodin -</h5>
<form action='' method='POST'>
	<fieldset>
		Nombre: <input type='text' name='nombre'/>
		Apellido: <input type='text' name='apellido'/>
		Edad: <input type='int'	name='edad'/>
		<input type='submit' name='busca' value='Buscar'/>
	</fieldset>
</form>

<form action="" method="POST">
	<input type='submit' name='volver' value='Volver al menu' />
</form>

<?php

if(isset($_POST['busca'])){
		require('buscar.php');
	}
