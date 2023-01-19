<?php

error_reporting(0);
$aviso = $_GET['aviso'];

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
                <link href="estilos.css" rel="stylesheet" type="text/css">
	</head>
	<body>	
		<?php     
                    if ($aviso=='true'){
                    echo "<p class=aviso>Credenciales inválidos</p>";
                    }
                ?>
		<form action = 'pagina2.php' method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php ?>"
			id = "usuario" name = "usuario" type = "text">		
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">					
			<input type = "submit">
		</form>
                
	</body>
</html>
