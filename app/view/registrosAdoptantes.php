<?php
require '../model/Persona.php';

$listaAdoptantes = Persona::obtenerAdoptantes();
$totalAdoptantes = count($listaAdoptantes);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <!--Google Material Icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <?php include 'dashboardSidebar.php' ?>
        <!-- Page Content  -->
        <div id="content">
            <?php include 'dashboardNavbar.php' ?>

            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Registro de Adoptantes</h4>
                                <p class="category">Se muestran los resultados de los registros de adoptantes mas actuales.</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>RUT</th>
                                            <th>NOMBRE</th>
                                            <th>APELLIDO</th>
                                            <th>DIRECCION</th>
                                            <th>REGION</th>
                                            <th>CIUDAD</th>
                                            <th>ESTADO CIVIL</th>
                                            <th>PROFESION</th>
                                            <th>TELEFONO</th>
                                            <th>EMAIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listaAdoptantes as $row) { ?>
                                            <tr>
                                                <td><?= $row->id ?></td>
                                                <td><?= $row->rut ?></td>
                                                <td><?= $row->nombre ?></td>
                                                <td><?= $row->apellido ?></td>
                                                <td><?= $row->direccion ?></td>
                                                <td><?= $row->region ?></td>
                                                <td><?= $row->ciudad ?></td>
                                                <td><?= $row->estado_civil ?></td>
                                                <td><?= $row->profesion ?></td>
                                                <td><?= $row->telefono ?></td>
                                                <td><?= $row->email ?></td>
                                                <td>
                                                    <a onclick="prepopularEdicion(this)" id="btnEditModal<?= $row->id ?>" class="icon icon-info" data-toggle="modal" data-target="#editarAdoptante"
                                                        data-identificador="<?= $row->id ?>"
                                                        data-nombre="<?= $row->nombre ?>" 
                                                        data-apellido="<?= $row->apellido ?>"
                                                        data-direccion="<?= $row->direccion ?>"
                                                        data-region="<?= $row->region ?>"
                                                        data-ciudad="<?= $row->ciudad ?>"
                                                        data-estadocivil="<?= $row->estado_civil ?>"
                                                        data-profesion="<?= $row->profesion ?>"
                                                        data-telefono="<?= $row->telefono ?>"
                                                        data-email="<?= $row->email ?>">
                                                        <span class="material-icons">
                                                            mode_edit
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a onclick="otorgarValorEliminar(this)" id="btnDeleteModal<?= $row->id ?>" class="icon icon-rose" data-toggle="modal" data-target="#eliminarAdoptante"
                                                        data-identificador="<?= $row->id ?>">
                                                        <span class="material-icons">
                                                            delete
                                                        </span>
                                                    </a>
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
        </div>
  
        <!-- Modal - Editar Adoptante -->
        <div class="modal fade" id="editarAdoptante" tabindex="-1" role="dialog" aria-labelledby="editarAdoptanteTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Adoptante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="editarAdoptante.php">
                            <div class="form-group">
                                <label for="formGroupExampleInput0">Id</label>
                                <input type="text" class="form-control" id="identificador" readonly>
                              </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput1">Nombre</label>
                              <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">Apellido</label>
                              <input type="text" class="form-control" id="apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Direccion</label>
                                <input type="text" class="form-control" id="direccion" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Region</label>
                              <input type="text" class="form-control" id="region" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Estado Civil</label>
                              <input type="text" class="form-control" id="estadocivil" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Profesion</label>
                              <input type="text" class="form-control" id="profesion" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Telefono</label>
                              <input type="text" class="form-control" id="telefono" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput3">Email</label>
                              <input type="email" class="form-control" id="email" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button onclick="editarAdoptante(this)" type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Eliminar Adoptante -->
        <div class="modal fade" id="eliminarAdoptante" tabindex="-1" role="dialog" aria-labelledby="eliminarAdoptanteTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Adoptante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput0">Id</label>
                            <input class="form-control" id="identificadorEliminar" readonly>
                        </div>
                        <span class="text-justify">Seguro que quieres eliminar este registro?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" onclick="eliminarAdoptante()" class="btn btn-danger">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../controller/registrosAdoptantes.js"></script>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>
</body>
</html>