<?php
  print_r($_POST);
   if (
        empty($_POST["inputNombre"]) || 
        empty($_POST["inputApellido"]) || 
        empty($_POST["inputRut"]) || 
        empty($_POST["inputFechaNacimiento"]) || 
        empty($_POST["inputDireccion"]) || 
        empty($_POST["inputRegion"]) || 
        empty($_POST["inputCiudad"]) || 
        empty($_POST["inputComuna"]) || 
        empty($_POST["inputCodigoPostal"]) || 
        empty($_POST["inputEstadoCivil"]) || 
        empty($_POST["inputProfesion"]) || 
        empty($_POST["inputEmail"]) || 
        empty($_POST["inputTelefono"])
    ) {
    // code...
    echo "Data not found";
  }

  include_once '../model/Conexion.php';
  $nombre = $_POST["inputNombre"];
  $apellido = $_POST["inputApellido"];
  $rut = $_POST["inputRut"];
  $fecha_nacimiento = $_POST["inputFechaNacimiento"];
  $direccion = $_POST["inputDireccion"];
  $region = $_POST["inputRegion"];
  $ciudad = $_POST["inputCiudad"];
  $comuna = $_POST["inputComuna"];
  $codigo_postal = $_POST["inputCodigoPostal"];
  $estado_civil = $_POST["inputEstadoCivil"];
  $profesion = $_POST["inputProfesion"];
  $email = $_POST["inputEmail"];
  $telefono = $_POST["inputTelefono"];
  $tyc = $_POST["inputTyC"];

  // Validate Fields
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rut = str_replace(['.', '-', ' '], '', $rut);
    $rut = substr($rut, 0, -1) . '-' . substr($rut, -1);
    echo 'El RUT ingresado es: ' . $rut;
  }

  echo $nombre;
  echo $apellido;
  echo $rut;
  echo $fecha_nacimiento;
  echo $direccion;
  echo $region;
  echo $ciudad;
  echo $comuna;
  echo $codigo_postal;
  echo $estado_civil;
  echo $profesion;
  echo $email;
  echo $telefono;
  echo $tyc;

  $conexion = new Conexion();
  $query = $conexion->prepare("INSERT INTO persona(nombre, apellido, rut, fecha_nacimiento, direccion, region, ciudad, comuna, codigo_postal, estado_civil, profesion, email, telefono ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $result = $query->execute([$nombre,$apellido,$rut,$fecha_nacimiento,$direccion,$region,$ciudad,$comuna,$codigo_postal,$estado_civil,$profesion,$email,$telefono]);

  if($result === TRUE){
    header('Location: ../view/confirmacion.php');
  }else{
    header('Location: ../view/registrarPersona.php?error=true');
    exit();
  }

?>
