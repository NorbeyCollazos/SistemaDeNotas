<?php
require_once("../../Usuarios/Modelo/Usuarios.php");

$Modelousuarios = new Usuarios();
$Modelousuarios->validateSession();

$Id = $_GET['Id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Materia</title>
</head>
<body>
   <h1>Eliminar Materia</h1>
   <form action="../Controladores/delete.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $Id ?>">
    <p>¿Estás seguro de eliminar el Materia?</p>
    <input type="submit" value="Eliminar Materia">
   </form> 
</body>
</html>