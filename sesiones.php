<?php
	@session_start();

	if (empty($_SESSION['usuario'])){
		$_SESSION['usuario'] = $_POST['usuar'];
		$_SESSION['passw'] = $_POST['pas'];
		header('Location: controlador.php');
	}
		

		
