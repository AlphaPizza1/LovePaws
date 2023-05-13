<?php
    require '../model/Mascota.php';
    if(!isset($_GET['identificador'])){
        header('Location: registrosMascotas.php?errorEliminar=true');
        exit();
    }else{
        $identificador = $_GET['identificador'];
        if($identificador != null){
            Mascota::eliminarMascota($identificador);
        }else{
            echo 'No data to change';
        }
    }
?>