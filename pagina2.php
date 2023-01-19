 <?php
 
 $usuario = $_POST['usuario'];
 $clave = $_POST["clave"];
 
 if (((strlen($clave)) >= 5 && (strlen($clave)) <=15 )) {
    if (($usuario == "usuario19") && ($clave == "password19")){
        echo "Credenciales correctas" . "<br><br>";
        echo "Usuario: ". $usuario ."<br>";
        echo "Contraseña: ". $clave ;
    } 
    else {
        header('location:https://localhost/PPS/PhpProject1/pagina1.php?aviso=true');
    }     
 }
 else { 
      header('location:https://localhost/PPS/PhpProject1/pagina1.php?long=true');
 }

?>

<html>
    <head>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    </head>
</html>
