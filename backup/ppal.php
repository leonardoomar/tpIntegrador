<?php
	//ob_start();
	@session_start();
	//$error = ob_get_clean();
	 
/*
	if(!empty($error)){
		//echo 'Ya existe una sesión.ppal<br />';
	}else{
		//echo '<br>Sesión creada.ppal<br />';
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
	
	if (isset($_POST['alta'])){
		header('Location: darAlta.php');
		die();
	}
	
	if (isset($_POST['baja'])){
		header('Location: darBaja.php');
		die();
	}
	
	if (isset($_POST['modi'])){
		header('Location: aModificar.php');
		die();
	}
	
	if (isset($_POST['busc'])){
		header('Location: aBuscar.php');
		die();
	}

?>
<br><br>
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
</form>
