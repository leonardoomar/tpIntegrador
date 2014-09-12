<?php
	
	@session_start();
	
	if(!isset($_SESSION['usuario'])){
		require("sesiones.php");
	}
		
	header('Content-Type: text/html; charset=UTF-8');
	
	if (isset($_POST['alta'])){
		header('Location: darAlta.php');
		die();
	}
	
	if (isset($_POST['baja'])){
		header('Location: darBaja.php');
		die();
	}
	
	if (isset($_POST['modi'])){
		header('Location: modificar.php');
		die();
	}
	
	if (isset($_POST['busc'])){
		header('Location: aBuscar.php');
		die();
	}
	
	if (isset($_POST['sale'])){
		$_SESSION['url']='salir';
		header('Location: controlador.php');
		die();
	}

?>

<h2>Menu principal</h2>
</br>
<form action="" method="POST">
	<input type='submit' name='alta' value='Dar de alta' />
	<br><br>
	<input type='submit' name='baja' value='Dar de baja' />
	<br><br>
	<input type='submit' name='modi' value='Modificar' />
	<br><br>
	<input type='submit' name='busc' value='Buscar' />
	<br><br>
	<input type='submit' name='sale' value='Salir' />
</form>
