<?php
//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

//requqerimos el modelo de Metodos
require_once("../../Metodos.php");
$ModeloMetodos = new Metodos();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiante</title>
</head>

<body>
    <h1>Registrar estudiante</h1>
    <form action="../Controladores/add.php" method="post">

        <input type="text" name="Nombre" placeholder="Nombre"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos"><br><br>
        <input type="text" name="Documento" placeholder="Documento"><br><br>
        <input type="text" name="Correo" placeholder="Correo"><br><br>
        <select name="Materia">
            <option>Seleccione la Materia</option>
            <?php
            $Materias = $ModeloMetodos->getMaterias();
            if ($Materias != null) {
                foreach ($Materias as $materia) {
            ?>
                    <option value="<?php echo $materia['ID_MATERIA'] ?>"><?php echo $materia['MATERIA'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>

        <select name="Docente">
            <option>Seleccione el docente</option>
            <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if ($Docentes != null) {
                foreach ($Docentes as $docente) {
            ?>
                    <option value="<?php echo $docente['ID_USUARIO']?>"><?php echo $docente['NOMBRE'].' '.$docente['APELLIDO'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>
        <input type="number" name="Promedio" placeholder="Promedio"><br><br>
        <input type="submit" value="Registrar Estudiante">

    </form>
</body>

</html>