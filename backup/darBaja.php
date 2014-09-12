<?php
/*
	ob_start();
	session_start();
	$error = ob_get_clean();
	 
	if(!empty($error)){
		echo 'Ya existe una sesión.<br />';
	}else{
		echo 'Sesión creada.<br />';
	}	
*/
?>

<h2>Menu dar de baja cliente</h2>
<form action='baja.php' method='POST'>
	<fieldset>
		Nombre: <input type='text' name='nombre'/>
		Apellido: <input type='text' name='apellido'/>
		Edad: <input type='int'	name='edad'/>
		<input type='submit' value='Aceptar'/>
	</fieldset>
</form>
