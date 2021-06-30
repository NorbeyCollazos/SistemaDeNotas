<?php

require_once("././Conexion.php");

class Usuarios extends Conexion{
    public function __construct(){
        $this->db = parent::__construct();
    }
}


?>