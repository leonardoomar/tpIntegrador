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
				"DELETE FROM clientes WHERE apellido='$ape' and nombre='$nom' and edad=$eda"
			  );
		
	$pdo->commit();
	if ($afectado){
		echo "<h1> Se dio de baja $afectado cliente</h1>";		
		
	}else{
		echo "<h1> No se pudo eliminar cliente. Verifique los datos</h1>";
	}
	
	$_SESSION['url']='baja';
	//header('Location: controlador.php');
	//die();
	
}catch(PDOException $e){
	$pdo->rollBack();
	echo "<h1>La operacion fallo</h1>".$e->getMessage();
}
