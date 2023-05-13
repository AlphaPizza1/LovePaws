<?php
  print_r($_POST);
  if (empty($_POST["txtRUT"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtFechaNacimiento"])) {
    // code...
    echo "Data not found";
    header('Location: ../view/index.php?error=true');
    exit();
  }

  include_once '../model/Conexion.php';
  $RUT = $_POST["txtRUT"];
  $nombre = $_POST["txtNombre"];
  $apellido = $_POST["txtApellido"];
  $direccion = $_POST["txtDireccion"];
  $estado = 1;
  $fecha_nacimiento = $_POST["txtFechaNacimiento"];

  $conexion = new Conexion();
  $query = $conexion->prepare("INSERT INTO patient(rut, nombre, apellido, direccion, estado, fecha_nacimiento) VALUES (?,?,?,?,?,?)");
  $result = $query->execute([$RUT,$nombre,$apellido,$direccion,$estado,$fecha_nacimiento]);

  if($result === TRUE){
    header('Location: ../view/index.php?success=true');
  }else{
    header('Location: ../view/index.php?error=true');
    exit();
  }

?>
