<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){
    $Materia = $_POST['Materia'];

    $ModeloMaterias = new Materias();
    $ModeloMaterias->add($Materia);

}else{
    header("Location: ../../index.php");
}


?>