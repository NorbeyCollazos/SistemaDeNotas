<?php
$materias = array("Programación", "Cultura", "Ciencias sociales", "Español", "Inglés");
$docentes = array("Pedro Maria", "Reinaldo Rueda", "Pepe Sanchez", "Cristian Debolla", "Pancrasio Puentes");
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
            foreach ($materias as $materia) {
            ?>
                <option value="<?php echo $materia ?>"><?php echo $materia ?></option>
            <?php
            }
            ?>
        </select><br><br>

        <select name="Docente">
            <option>Seleccione el docente</option>
            <?php
            foreach ($docentes as $docente) {
            ?>
                <option value="<?php echo $docente ?>"><?php echo $docente ?></option>
            <?php
            }
            ?>
        </select><br><br>
        <input type="number" name="Promedio" placeholder="Promedio"><br><br>
        <input type="submit" value="Registrar Estudiante">

    </form>
</body>

</html>