<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Docentes.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Estado = $_POST['Estado'];

    $ModeloDocentes = new Docentes();
    $ModeloDocentes->update($Id, $Nombre, $Apellido, $Usuario, $Estado);

}else{
    header("Location: ../../index.php");
}

?>