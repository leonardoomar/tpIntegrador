<?php
@session_start();
/*
	ob_start();
	
	$error = ob_get_clean();
	 
	if(!empty($error)){
		echo 'Ya existe una sesión.alta<br />';
	}else{
		echo 'Sesión creada.alta<br />';
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
	
	require("conexBase.php");
	if (!$_SESSION['ce']){
		echo 'conexion erronea';
	}
	
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$eda = $_POST['edad'];

try{
	$pdo->beginTransaction();
	$afectado=$pdo->exec(
				"INSERT INTO clientes (apellido, nombre, edad)
				VALUES ('$ape','$nom',$eda)"
			  );
		
	$pdo->commit();
	
	echo "<h3> Se dio de alta $afectado nuevo cliente</h3>";
	header('Location: controlador.php');
	die();

	
}catch(PDOException $e){
	$pdo->rollBack();
	echo "<h1>La operacion fallo</h1>".$e->getMessage();
}
