<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$Modelousuarios = new Usuarios();
$Modelousuarios->validateSession();

if ($_POST){
    $Id = $_POST['Id'];

    $ModeloMaterias = new Materias();
    $ModeloMaterias->delete($Id);

}else{
    header("Location: ../../index.php");
}

?>