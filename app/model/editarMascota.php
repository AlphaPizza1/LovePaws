<?php
    require '../model/Mascota.php';
    if(!isset($_GET['identificador'])){
        header('Location: registrosMascotas.php?errorEditar=true');
        exit();
    }else{
        $identificador = $_GET['identificador'];
        $nombre = $_GET['nombre'];
        $raza = $_GET['raza'];
        $tipo = $_GET['tipo'];
        $edad = $_GET['edad'];
        $notas = $_GET['notas'];
        $descripcion = $_GET['descripcion'];
        $color = $_GET['color'];
        $genero = $_GET['genero'];
        $personalidad = $_GET['personalidad'];
        $tamano = $_GET['tamano'];

        echo $identificador;
        echo $nombre;
        echo $apellido;
        echo $direccion;
        if($identificador != null){
            Mascota::editarMascota($identificador, $nombre, $raza, $tipo, $edad, $notas, $descripcion, $color, $genero, $personalidad, $tamano);
        }else{
            echo 'No data to change';
        }
    }
?>
