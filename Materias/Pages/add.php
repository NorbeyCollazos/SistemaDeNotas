<?php
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>
<body>
    <h1>Registrar materia</h1>
    <form action="../Controladores/add.php" method="post">
        <input type="text" name="Materia" placeholder="Materia"><br><br>
        <input type="submit" value="Registrar materia">
    </form>
</body>
</html>