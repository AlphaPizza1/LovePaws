<?php
    require_once 'Conexion.php';

    class Usuarios{
        public static function obtenerUsuarios(){
            try {
                $connection = new Conexion();
                $sql = "SELECT id, nombre, apellido, rut, direccion, fecha_nacimiento, region, ciudad, comuna, codigo_postal, estado_civil, profesion, telefono, email FROM persona";
                $query = $connection->prepare($sql);
                $query->execute();
                $records = $query->fetchAll(PDO::FETCH_OBJ);
                return $records;
            } catch (\Exception $e) {
            }
        }

        public static function obtenerUsuario($usuario){
            try{
                $connection = new Conexion();
                $sql = "SELECT id, nombre, apellido, rut, direccion, fecha_nacimiento FROM persona WHERE Id = $usuario";
                $query = $connection->prepare($sql);
                $query->execute();
                $record = $query->fetch(PDO::FETCH_OBJ);
                return $record;
            }catch (\Exception $e){

            }
        }

        public static function editarUsuario($id, $nombre, $apellido, $direccion, $region, $ciudad, $estadocivil, $profesion, $telefono, $email){
            $connection = new Conexion();
            $sql = "UPDATE usuario SET nombre = ?, apellido = ?, direccion = ?, region = ?, ciudad = ?, estado_civil = ?, profesion = ?, telefono = ?, email = ? WHERE Id = $id";
            $query = $connection->prepare($sql);
            $result = $query->execute([$nombre, $apellido, $direccion, $region, $ciudad, $estadocivil, $profesion, $telefono, $email]);

            if($result === TRUE){
                header('Location: ../view/registrosUsuarios.php');
            }else{
                header('Location: ../view/registrosUsuarios.php?errorEdit=true');
            }

        }

        public static function eliminarUsuario($id){
            $connection = new Conexion();
            $sql = "DELETE FROM usuario WHERE Id = $id";
            $query = $connection->prepare($sql);
            $result = $query->execute();

            if($result === TRUE){
                header('Location: ../view/registrosUsuarios.php');
            }else{
                header('Location: ../view/registrosUsuarios.php?errorDelete=true');
            }

        }

        // public static function insertPatients($RUT, $nombre, $apellido, $direccion, $fecha_nacimiento){
        //     try {
        //       $connection = new Conexion();
        //       $sql = "INSERT INTO patient(RUT, Nombre, Apellido, Direccion, Estado, Fecha_Nacimiento)
        //       VALUES (?,?,?,?,?,?)";
        //       $query = $connection->prepare($sql);
        //       $query->bindParam(1, $RUT);
        //       $query->bindParam(2, $nombre);
        //       $query->bindParam(3, $apellido);
        //       $query->bindParam(4, $direccion);
        //       $query->bindParam(5, 1);
        //       $query->bindParam(6, $fecha_nacimiento);
        //       $query->execute();
        //     } catch (\Exception $e) {
            
        //     }
        // }
    }
