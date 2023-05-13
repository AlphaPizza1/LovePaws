<?php
    require '../model/Persona.php';
    if(!isset($_GET['identificador'])){
        header('Location: registrosAdoptantes.php?errorEditar=true');
        exit();
    }else{
        $identificador = $_GET['identificador'];
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $direccion = $_GET['direccion'];
        $region = $_GET['region'];
        $ciudad = $_GET['ciudad'];
        $estadocivil = $_GET['estadocivil'];
        $profesion = $_GET['profesion'];
        $telefono = $_GET['telefono'];
        $email = $_GET['email'];

        echo $identificador;
        echo $nombre;
        echo $apellido;
        echo $direccion;
        if($identificador != null){
            Persona::editarAdoptante($identificador, $nombre, $apellido, $direccion, $region, $ciudad, $estadocivil, $profesion, $telefono, $email);
        }else{
            echo 'No data to change';
        }
    }
?>
