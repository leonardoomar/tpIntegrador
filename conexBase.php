<?php
	@session_start();
	
	$us = $_SESSION['usuario'];
	$pss = $_SESSION['passw'];
	
	try{
		$pdo = new PDO(
						'mysql:host=localhost;dbname=clientes_db',
						$us,$pss
					  );
						
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->exec("SET NAMES UTF8");
		$_SESSION['ce']=true;
		
		}catch(PDOException $e){
			echo 'Error de conexion a la base de datos: ('.$e->getMessage().')';
			$_SESSION['ce']=false;

		}
