<?php
//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar estudiante</title>
</head>
<body>
   <h1>Eliminar estudiante</h1>
   <form action="../Controladores/delete.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $Id ?>">
    <p>¿Estás seguro de eliminar el estudiante?</p>
    <input type="submit" value="Eliminar estudiante">
   </form> 
</body>
</html>