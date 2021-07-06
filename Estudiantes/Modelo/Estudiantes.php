<?php

require_once("../../Conexion.php");

class Estudiantes extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $FechaRegistro){
        $statement = $this->db->prepare("INSERT INTO estudiantes (NOMBRE, APELLIDO, DOCUMENTO, CORREO, MATERIA, DOCENTE, PROMEDIO, FECHA_REGISTRO)
        VALUES (:Nombre, :Apellido, :Documento, :Correo, :Materia, :Docente, :Promedio, :FechaRegistro)");
        $statement->bindParam(':Nombre',$Nombre);
        $statement->bindParam(':Apellido',$Apellido);
        $statement->bindParam(':Documento',$Documento);
        $statement->bindParam(':Correo',$Correo);
        $statement->bindParam(':Materia',$Materia);
        $statement->bindParam(':Docente',$Docente);
        $statement->bindParam(':Promedio',$Promedio);
        $statement->bindParam(':FechaRegistro',$FechaRegistro);
        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/add.php");
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT E.ID_ESTUDIANTE, E.NOMBRE,E.APELLIDO, E.DOCUMENTO, E.CORREO, M.MATERIA, D.NOMBRE AS DOCENTE, D.APELLIDO, E.PROMEDIO, E.FECHA_REGISTRO
         FROM estudiantes E JOIN usuarios D ON E.DOCENTE = D.ID_USUARIO JOIN materias M ON E.MATERIA = M.ID_MATERIA");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT E.ID_ESTUDIANTE, E.NOMBRE,E.APELLIDO, E.DOCUMENTO, E.CORREO, M.ID_MATERIA, M.MATERIA, D.ID_USUARIO, D.NOMBRE AS DOCENTE, E.PROMEDIO, E.FECHA_REGISTRO
        FROM estudiantes E JOIN usuarios D ON E.DOCENTE = D.ID_USUARIO JOIN materias M ON E.MATERIA = M.ID_MATERIA
        WHERE ID_ESTUDIANTE = :Id");
        $statement->bindParam(':Id',$Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($Id, $Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $FechaRegistro){
        $statement = $this->db->prepare("UPDATE estudiantes  SET NOMBRE = :Nombre, APELLIDO = :Apellido, DOCUMENTO = :Documento, CORREO = :Correo, MATERIA = :Materia, DOCENTE = :Docente, PROMEDIO = :Promedio, FECHA_REGISTRO = :FechaRegistro
        WHERE ID_ESTUDIANTE = :Id");
        $statement->bindParam(':Id',$Id);
        $statement->bindParam(':Nombre',$Nombre);
        $statement->bindParam(':Apellido',$Apellido);
        $statement->bindParam(':Documento',$Documento);
        $statement->bindParam(':Correo',$Correo);
        $statement->bindParam(':Materia',$Materia);
        $statement->bindParam(':Docente',$Docente);
        $statement->bindParam(':Promedio',$Promedio);
        $statement->bindParam(':FechaRegistro',$FechaRegistro);
        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/add.php");
        }
    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE ID_ESTUDIANTE = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/delete.php");
        }
    }
}

?>