<?php

@session_start();
	//7ob_start();
	//session_start();
	//$error = ob_get_clean();
	 
/*
	if(!empty($error)){
		echo '<br>Ya existe una sesión.conexbase<br />';
	}else{
		echo '<br>Sesión creada.conexbase<br />';
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
		echo 'conexion exitosa';
		$_SESSION['ce']=true;
		
		}catch(PDOException $e){
			echo 'Error de conexion a la base de datos: ('.$e->getMessage().')';
			$_SESSION['ce']=false;

		}
