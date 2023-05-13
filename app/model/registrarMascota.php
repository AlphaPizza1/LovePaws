<?php
  print_r($_POST);
   if (
        empty($_POST["inputNombre"]) || 
        empty($_POST["inputEdad"]) || 
        empty($_POST["inputTipoMascota"]) || 
        empty($_POST["inputRaza"]) || 
        empty($_POST["inputColor"]) || 
        empty($_POST["inputPersonalidad"]) ||
        empty($_POST["inputTamano"]) || 
        empty($_POST["inputGenero"]) ||
        empty($_POST["inputRegion"]) ||
        empty($_POST["inputComuna"]) ||
        empty($_POST["inputCiudad"])
    ) {
    // code...
    echo "Data not found";
  }

  include_once '../model/Conexion.php';
  $nombre = $_POST["inputNombre"];
  $edad = $_POST["inputEdad"];
  $tipo_mascota = $_POST["inputTipoMascota"];
  $raza = $_POST["inputRaza"];
  $color = $_POST["inputColor"];
  $personalidad = $_POST["inputPersonalidad"];
  $tamano = $_POST["inputTamano"];
  $genero = $_POST["inputGenero"];
  $descripcion = $_POST["inputDescripcion"];
  $notas = $_POST["inputNotas"];
  $region = $_POST["inputRegion"];
  $comuna = $_POST["inputComuna"];
  $ciudad = $_POST["inputCiudad"];

  // Insert image
  $file = $_FILES["inputImagen"]["name"];
  $file_tmp = $_FILES["inputImagen"]["tmp_name"];
  if (move_uploaded_file($file_tmp, "../resources/fotos/".$file)) {
    echo "Imagen subida con exito";
  }


  $conexion = new Conexion();
  $query = $conexion->prepare("INSERT INTO mascota(nombre, edad, tipo_mascota, raza, color, personalidad, tamano, genero, descripcion, notas, imagen_url, region, ciudad, comuna ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $result = $query->execute([$nombre,$edad,$tipo_mascota,$raza,$color,$personalidad,$tamano,$genero,$descripcion,$notas,$file,$region,$ciudad,$comuna]);

  if($result === TRUE){
    header('Location: ../view/registrosMascotas.php?success=true');
  }else{
    header('Location: ../view/registrosMascotas.php?error=true');
    exit();
  }

?>
