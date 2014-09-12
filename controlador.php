<?php	
	session_start();

	if(empty($_SESSION['usuario'])){
		require("sesiones.php");
	}

	$url=$_SESSION['url'];
	
	if ($url=='login'){
			
			require('conexBase.php');			

			if ($_SESSION['ce']){
				header('Location: ppal.php');
				die();
				
			}else{
				header('Location: login.php');
				die();
			}	
						
	}elseif($url=='alta'){
		header('Location: darAlta.php');
		die();
		
	}elseif($url=='darAlta'){
		header('Location: ppal.php');
		die();
		
	}elseif($url=='baja'){
		header('Location: darBaja.php');
		die();
			
	}elseif($url=='darBaja'){
		header('Location: ppal.php');
		die();
		
	}elseif($url=='modificar'){
		header('Location: ppal.php');
		die();
		
	}elseif($url=='modif'){
		header('Location: modificar.php');
		die();
		
	}elseif($url=='aBuscar'){
		header('Location: ppal.php');
		die();
		
	}elseif($url=='salir'){
		session_destroy();
		header('Location: login.php');
		die();	
		
	}else{
		echo 'algo salio mal';
		echo 'url: '.$url;
	}
