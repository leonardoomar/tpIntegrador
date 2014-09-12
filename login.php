<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>   
			<?php
				session_start();
				$_SESSION['usuario']="";
				$_SESSION['url']='login';
				
			?>      
			 
            <form action="controlador.php" method="post">
            <fieldset>
				<legend>Ingrese usuario y contraseña (un usuario con accesso a la base Mysql)</legend>    
					<input type='text' name='usuar' />
					<input type='text' name='pas'/>
					<input type="submit" value="Entrar"/>
				</legend>
			</form>
    </body>
</html>
