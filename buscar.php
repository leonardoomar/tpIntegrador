<?php
	@session_start();
	
	require("conexBase.php");
	
	if (!$_SESSION['ce']){
		echo 'conexion erronea';
	}
	
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$eda = $_POST['edad'];

	try{
		
		$sql = "SELECT id, apellido, nombre, edad FROM clientes
				WHERE ((apellido = :apel) and (nombre = :nomb) and (edad = :edad))";
				
		$stmt = $pdo->prepare($sql);
		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		$stmt->bindParam(':apel',$ape);
		$stmt->bindParam(':nomb',$nom);
		$stmt->bindParam(':edad',$eda);
		
		$stmt->execute();
		
		$resultados = $stmt->fetchAll();

		
	}catch(PDOException $e){
		echo 'Error de conexion a la base de datos'.$e->getMessage();
	}
	
	if ($resultados){
	
	foreach($resultados as $fila)
	{
	  echo sprintf("ID:%s - APELLIDO:%s - NOMBRE: %s (%d años)<br/>",
				   $fila['id'],
				   $fila['apellido'],
				   $fila['nombre'],
				   $fila['edad']);
	};
	}else{
		echo "no existen clientes con estos datos";
	}	
