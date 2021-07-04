<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$ModeloMaterias = new Materias();
$Materias = $ModeloMaterias->get();

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
    <h1>Materias</h1>
    <a href="add.php">Registrar Materia</a><br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Materia</th>
            <th>Acciones</th>
        </tr>
        <?php
            if($Materias != null){
                foreach($Materias as $Materia){
               
        ?>
        <tr>
            <td><?php echo $Materia['ID_MATERIA'] ?></td>
            <td><?php echo $Materia['MATERIA'] ?></td>
            <td>
            <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>">Editar</a>
            <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
             
            }
        }
        ?>
    </table>
</body>
</html>