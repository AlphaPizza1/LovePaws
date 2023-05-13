<?php
require '../model/Usuarios.php';

$listaUsuarios = Usuarios::obtenerUsuarios();
$totalUsuarios = count($listaMascotas);

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
                                <h4 class="card-title">Registros de Usuarios</h4>
                                <p>Se muestran los resultados de los registros de usuarios mas actuales.</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>RAZA</th>
                                            <th>TIPO</th>
                                            <th>EDAD</th>
                                            <th>FECHA REGISTRO</th>
                                            <th>NOTAS</th>
                                            <th>DESCRIPCION</th>
                                            <th>COLOR</th>
                                            <th>GENERO</th>
                                            <th>PERSONALIDAD</th>
                                            <th>TAMAÑO</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listaUsuarios as $row) { ?>
                                            <tr>
                                                <td><?= $row->id ?></td>
                                                <td><?= $row->nombre ?></td>
                                                <td><?= $row->raza ?></td>
                                                <td><?= $row->tipo_mascota ?></td>
                                                <td><?= $row->edad ?></td>
                                                <td><?= $row->fecha_registro ?></td>
                                                <td><?= $row->notas ?></td>
                                                <td><?= $row->descripcion ?></td>
                                                <td><?= $row->color ?></td>
                                                <td><?= $row->genero ?></td>
                                                <td><?= $row->personalidad ?></td>
                                                <td><?= $row->tamano ?></td>
                                                <td>
                                                    <a onclick="prepopularEdicion(this)" id="btnEditModal<?= $row->id ?>" class="icon icon-info" data-toggle="modal" data-target="#editarUsuario"
                                                        data-identificador="<?= $row->id ?>"
                                                        data-nombre="<?= $row->nombre ?>" 
                                                        data-raza="<?= $row->raza ?>"
                                                        data-tipo="<?= $row->tipo_mascota ?>"
                                                        data-edad="<?= $row->edad ?>"
                                                        data-notas="<?= $row->notas ?>"
                                                        data-descripcion="<?= $row->descripcion ?>"
                                                        data-color="<?= $row->color ?>"
                                                        data-genero="<?= $row->genero ?>"
                                                        data-personalidad="<?= $row->personalidad ?>"
                                                        data-tamano="<?= $row->tamano ?>">
                                                        <span class="material-icons">
                                                            mode_edit
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a onclick="otorgarValorEliminar(this)" id="btnDeleteModal<?= $row->id ?>" class="icon icon-rose" data-toggle="modal" data-target="#eliminarUsuario"
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
        <!-- Modal - Editar Usuario -->
        <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="editarUsuario.php">
                            <div class="form-group">
                                <label for="formGroupExampleInput0">Id</label>
                                <input type="text" class="form-control" id="identificador" readonly>
                              </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput1">Nombre</label>
                              <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">Raza</label>
                              <input type="text" class="form-control" id="raza">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Tipo</label>
                                <input type="text" class="form-control" id="tipo">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput4">Edad</label>
                                <input type="text" class="form-control" id="edad">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput5">Notas</label>
                                <input type="text" class="form-control" id="notas">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput6">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput7">Color</label>
                                <input type="text" class="form-control" id="color">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput7">Genero</label>
                                <input type="text" class="form-control" id="genero">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput7">Personalidad</label>
                                <input type="text" class="form-control" id="personalidad">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput7">Tamaño</label>
                                <input type="text" class="form-control" id="tamano">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button onclick="editarUsuario(this)" type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Eliminar Usuario -->
        <div class="modal fade" id="eliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="eliminarUsuarioTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
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
                        <button type="button" onclick="eliminarUsuarios()" class="btn btn-danger">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../controller/registrosUsuarios.js"></script>
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