<?php
require '../model/Patient.php';

$listOfPatients = Patient::getAllPatients();
$totalPatients = count($listOfPatients);
//echo JSON_encode($listOfPatients);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../styles/index.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container-fluid" style="background-color: #F1F1F1">
            <div class="row">
                <!-- Sidebar -->
                <?php include 'sidebar.php' ?>
                <!-- Dashboard -->
                <div class="container col"> 
                    <h1 class="h3 mb-0 text-muted pt-4">Love Paws - Portal de Administrador</h1>
                    <!-- Summary Cards -->
                    <div class="row py-2">
                        <div class="col-sm-3 my-3">
                          <div class="card shadow">
                            <div class="card-body border-left-primary rounded">
                              <h5 class="card-title">Adoptantes</h5>
                              <span class="card-text">
                                <h1><?php echo $totalPatients; ?></h1>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 my-3">
                          <div class="card shadow">
                            <div class="card-body border-left-success rounded">
                              <h5 class="card-title">Mascotas Adoptadas</h5>
                              <span class="card-text">
                                <h1>25</h1>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 my-3">
                            <div class="card shadow">
                              <div class="card-body border-left-info rounded">
                                <h5 class="card-title">Mascotas</h5>
                                <span class="card-text">
                                  <h1>18</h1>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3 my-3">
                            <div class="card shadow">
                              <div class="card-body border-left-warning rounded">
                                <h5 class="card-title">Usuarios</h5>
                                <span class="card-text">
                                  <h1>14</h1>
                                </span>
                              </div>
                            </div>
                          </div>
                      </div>
                    <!-- Table -->
                    <div class="card">
                    <div class="card-body">
                        <a href="registrarMascota.php" class="btn btn-primary">Registrar Mascota</a>
                        <a href="registrarPersona.php" class="btn btn-primary">Llenar Formulario</a>
                        <table id="tablaBitacora" class="display nowrap table table-hover table-striped " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listOfPatients as $row) { ?>
                                    <tr>
                                        <td><?= $row->RUT ?></td>
                                        <td><?= $row->Nombre ?></td>
                                        <td><?= $row->Apellido ?></td>
                                        <td><?= $row->Direccion ?></td>
                                        <td><?= $row->Estado ?></td>
                                        <td><?= $row->Fecha_Nacimiento ?></td>
                                        <td>
                                            <a href="edit.php?record=<?php echo $row->Id; ?>"<i class="bi bi-pencil-square text-primary" style="font-size:2rem"></i></a>
                                            <a href="edit.php?record=<?php echo $row->Id; ?>"<i class="bi bi-trash text-danger" style="font-size:2rem"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

