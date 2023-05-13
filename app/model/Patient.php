<?php
require 'Conexion.php';
class Patient {

    public static function getAllPatients()
    {
        try {
            $connection = new Conexion();
            $sql = "SELECT Id, Nombre, Apellido, RUT, Direccion, Estado, Fecha_Nacimiento FROM patient";
            $query = $connection->prepare($sql);
            $query->execute();
            $records = $query->fetchAll(PDO::FETCH_OBJ);
            return $records;
        } catch (\Exception $e) {
        }
    }

    public static function getPatient($patientId)
    {
      try{
        $connection = new Conexion();
        $sql = "SELECT Id, Nombre, Apellido, RUT, Direccion, Estado, Fecha_Nacimiento FROM patient WHERE Id = $patientId";
        $query = $connection->prepare($sql);
        $query->execute();
        $record = $query->fetch(PDO::FETCH_OBJ);
        return $record;
      }catch (\Exception $e){

      }
    }

    public static function insertPatients($RUT, $nombre, $apellido, $direccion, $fecha_nacimiento){
        try {
          $connection = new Conexion();
          $sql = "INSERT INTO patient(RUT, Nombre, Apellido, Direccion, Estado, Fecha_Nacimiento)
          VALUES (?,?,?,?,?,?)";
          $query = $connection->prepare($sql);
          $query->bindParam(1, $RUT);
          $query->bindParam(2, $nombre);
          $query->bindParam(3, $apellido);
          $query->bindParam(4, $direccion);
          $query->bindParam(5, 1);
          $query->bindParam(6, $fecha_nacimiento);
          $query->execute();
        } catch (\Exception $e) {
    
        }
      }
}