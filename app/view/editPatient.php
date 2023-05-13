<?php
require '../model/Patient.php';

if(!isset($_GET['record'])){
    echo 'TEST';
}else{
    $recordId = $_GET['record'];
    $patient = Patient::getPatient($recordId);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awesome Doctors</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../styles/index.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container-large bg-light">
            <div class="row">
                <?php include 'sidebar.php' ?>

                <!-- Add New Members -->
                <div class="container col">
                    <div class="card">
                        <div class="card-header">
                            Register Member
                        </div>
                        <div class="card-body">
                            <!-- Edit Patient Form -->
                            <form method="POST" action="../model/registerPatient.php" id="registerPatient" class="p-4">
                                <div class="form-group">
                                    <label for="txtRUT">RUT</label>
                                    <input type="text" value="<?php echo $patient->RUT;?>" class="form-control" id="txtRUT" aria-describedby="RUT" name="txtRUT" placeholder="Ingrese RUT">
                                </div>
                                <div class="form-group">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="text" value="<?php echo $patient->Nombre;?>"  class="form-control" id="txtNombre" aria-describedby="Nombre" name="txtNombre" placeholder="Ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label for="txtApellido">Apellido</label>
                                    <input type="text" value="<?php echo $patient->Apellido;?>"  class="form-control" id="txtApellido" aria-describedby="Apellido" name="txtApellido" placeholder="Ingrese apellido">
                                </div>
                                <div class="form-group">
                                    <label for="txtDireccion">Direccion</label>
                                    <input type="text" value="<?php echo $patient->Direccion;?>"  class="form-control" id="txtDireccion" aria-describedby="Direccion" name="txtDireccion" placeholder="Ingrese direccion">
                                </div>
                                <div class="form-group">
                                    <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
                                    <input type="date" value="<?php echo $patient->Fecha_Nacimiento;?>" class="form-control" id="txtFechaNacimiento" aria-describedby="Apellido" name="txtFechaNacimiento" placeholder="Ingrese fecha de nacimiento">
                                </div>
                                <div class="pt-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>

