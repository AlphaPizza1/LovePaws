<?php
    require '../model/Persona.php';
    if(!isset($_GET['identificador'])){
        header('Location: registrosAdoptantes.php?errorEliminar=true');
        exit();
    }else{
        $identificador = $_GET['identificador'];
        if($identificador != null){
            Persona::eliminarAdoptante($identificador);
        }else{
            echo 'No data to change';
        }
    }
?>