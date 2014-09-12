<?php
	//ob_start();
	@session_start();
	//$error = ob_get_clean();
	 
	//if(!empty($error)){
		//echo 'Ya existe una sesión.controlador<br />';
	//}else{
		//echo 'Sesión creada.controlador<br />';
	//}	
	
/*
	if(empty($_SESSION['usuario']))
	{	
		$_SESSION['usuario']=$_POST['usuar'];
	}
*/
		
/*
	}else{			
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
		die();
		
	}

	if (isset($_POST['usuar']) & $_POST['usuar']!=NULL){
		
	}else{
		session_destroy();
		header("Location: login.php");
		die();	
	}
*/
	$_SESSION['usuario']=$_POST['usuar'];
	$_SESSION['passw']=$_POST['pas'];
	$url = $_SERVER['REQUEST_URI'];
	
	if (strstr($url,'login.php')){
		echo'voy a login';
			require('conexBase.php');
			echo 'vuelvo de login';

			if ($_SESSION['ce']){
				header('Location: ppal.php');
				die();
				
			}else{
				header('Location: login.php');
				die();
			}			

			
	}elseif(strstr($url,'alta.php')){
		header('Location: darAlta.php');
		die();
		
	}
		
