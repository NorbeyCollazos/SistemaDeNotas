<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$Modelousuarios = new Usuarios();
$Modelousuarios->validateSession();

if ($_POST){
    $Id = $_POST['Id'];
    $Materia = $_POST['Materia'];

    $ModeloMaterias = new Materias();
    $ModeloMaterias->update($Id, $Materia);

}else{
    header("Location: ../../index.php");
}

?>