<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Estado = $_POST['Estado'];

    $ModeloAdministradores = new Administradores();
    $ModeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado);

}else{
    header("Location: ../../index.php");
}

?>