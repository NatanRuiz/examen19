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
     echo "La clave debe tener entre 5 y 15 caracteres<br><br>"; 
     echo 'Pulse aquí para <a href="https://localhost/PPS/PhpProject1/pagina1.php">intentarlo de nuevo</a>';
 }

?>

<html>
    <head>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    </head>
</html>
