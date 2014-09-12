<?php
	session_start();
	
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
	$_SESSION['url']='alta';
	header('Location: controlador.php');
	die();

	
}catch(PDOException $e){
	$pdo->rollBack();
	echo "<h1>La operacion fallo</h1>".$e->getMessage();
}
