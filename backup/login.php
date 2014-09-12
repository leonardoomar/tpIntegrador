<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>   
			<?php $_SESSION['usuario']="";?>      
			 
            <form action="controlador.php" method="post">
            <fieldset>
				<legend>Ingrese usuario y contraseña</legend>    
					<input type='text' name='usuar' />
					<input type='text' name='pas'/>
					<input type="submit" value="Entrar"/>
				</legend>
			</form>
    </body>
</html>
