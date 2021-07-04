<?php

//requerimos el modelo 
require_once("../Modelo/Usuarios.php");

//validamos si llega una peticion post
if($_POST){
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    $Modelo = new Usuarios();

    if($Modelo->login($Usuario,$Contrasena)){
        header("Location: ../../Administradores/Pages/index.php");
    }else{
        header("Location: ../../index.php");
    }

}else{
    header("Location: ../../index.php");
}

?>