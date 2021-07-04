<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    $ModeloAdministradores = new Administradores();
    $ModeloAdministradores->add($Nombre,$Apellido,$Usuario, $Contrasena);

}else{
    header("Location: ../../index.php");
}





?>