<?php
	ob_start();
	session_start();
	$error = ob_get_clean();
	 
	if(!empty($error)){
		echo 'Ya existe una sesión.<br />';
	}else{
		echo 'Sesión creada.<br />';
	}
	
	require("conexBase.php");
	
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
	
}catch(PDOException $e){
	$pdo->rollBack();
	echo "<h1>La operacion fallo</h1>".$e->getMessage();
}
