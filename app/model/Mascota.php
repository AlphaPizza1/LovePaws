<?php
    require 'Conexion.php';

    class Mascota{
        public static function obtenerMascotas(){
            try {
                $connection = new Conexion();
                $sql = "SELECT id, nombre, edad, especie, raza, fecha_adopcion, tipo_mascota, fecha_registro, notas, descripcion, 
                color, genero, personalidad, tamano, imagen_url, lugar, region, ciudad, comuna FROM mascota ORDER BY id DESC";
                $query = $connection->prepare($sql);
                $query->execute();
                $records = $query->fetchAll(PDO::FETCH_OBJ);
                return $records;
            } catch (\Exception $e) {
            }
        }

        public static function obtenerMascota($mascota){
            try{
                $connection = new Conexion();
                $sql = "SELECT id, nombre, edad, especie, raza, fecha_adopcion, tipo_mascota, fecha_registro, notas, descripcion, 
                color, genero, personalidad, tamano, imagen_url, lugar, region, ciudad, comuna FROM mascota WHERE Id = $mascota";
                $query = $connection->prepare($sql);
                $query->execute();
                $record = $query->fetch(PDO::FETCH_OBJ);
                return $record;
            }catch (\Exception $e){

            }
        }

        public static function editarMascota($id, $nombre, $raza, $tipo, $edad, $notas, $descripcion, $color, $genero, $personalidad, $tamano, $region, $ciudad, $comuna){
            $connection = new Conexion();
            $sql = "UPDATE mascota SET nombre = ?, raza = ?, tipo_mascota = ?, edad = ?, notas = ?, descripcion = ?, color = ?, genero = ?, personalidad = ?, tamano = ?, region = ?, ciudad = ?, comuna = ? WHERE Id = $id";
            $query = $connection->prepare($sql);
            $result = $query->execute([$nombre, $raza, $tipo, $edad, $notas, $descripcion, $color, $genero, $personalidad, $tamano, $region, $ciudad, $comuna]);

            if($result === TRUE){
                header('Location: ../view/registrosMascotas.php');
            }else{
                header('Location: ../view/registrosMascotas.php?errorEdit=true');
            }

        }

        public static function eliminarMascota($id){
            $connection = new Conexion();
            $sql = "DELETE FROM mascota WHERE Id = $id";
            $query = $connection->prepare($sql);
            $result = $query->execute();

            if($result === TRUE){
                header('Location: ../view/registrosMascotas.php');
            }else{
                header('Location: ../view/registrosMascotas.php?errorDelete=true');
            }

        }

        // public static function obtenerPersona($patientId){
        //     try{
        //         $connection = new Conexion();
        //         $sql = "SELECT Id, Nombre, Apellido, RUT, Direccion, Estado, Fecha_Nacimiento FROM patient WHERE Id = $patientId";
        //         $query = $connection->prepare($sql);
        //         $query->execute();
        //         $record = $query->fetch(PDO::FETCH_OBJ);
        //         return $record;
        //     }catch (\Exception $e){

        //     }
        // }

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
