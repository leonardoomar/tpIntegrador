<?php	
	session_start();
	
	require("conexBase.php");
	
	if (!$_SESSION['ce']){
		echo 'conexion erronea';
	}
	
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$eda = $_POST['edad'];
	$id = $_POST['id'];

try{
	$pdo->beginTransaction();
	$afectado=$pdo->exec(
				"UPDATE clientes SET apellido='$ape', nombre='$nom', edad=$eda
				WHERE id=$id"
			  );
		
	$pdo->commit();
	if ($afectado){
		echo "<h1> Se modifico $afectado cliente</h1>";		
		
	}else{
		echo "<h1> No se pudo modificar cliente. Verifique los datos</h1>";
	}
	
	$_SESSION['url']='modif';
	header('Location: controlador.php');
	die();
	
}catch(PDOException $e){
	$pdo->rollBack();
	echo "<h1>La operacion fallo</h1>".$e->getMessage();
}
