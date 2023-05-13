<?php
require '../model/Mascota.php';

$listaMascotas = Mascota::obtenerMascotas();
$totalMascotas = count($listaMascotas);

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    
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
                                <h4 class="card-title">Registros de Mascotas</h4>
                                <p>Se muestran los resultados de los registros de mascotas mas actuales.</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table id="mascotasTable" class="table table-hover" style="font-size:11px;">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Raza</th>
                                            <th>Tipo</th>
                                            <th>Edad</th>
                                            <th>Fecha Registro</th>
                                            <th>Notas</th>
                                            <th>Descripcion</th>
                                            <th>Color</th>
                                            <th>Genero</th>
                                            <th>Personalidad</th>
                                            <th>Tamaño</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listaMascotas as $row) { ?>
                                            <tr>
                                                <td><?= $row->id ?></td>
                                                <td><img src="../resources/fotos/<?= $row->imagen_url ?>" width="80" /></td>
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
                                                    <a onclick="prepopularEdicion(this)" id="btnEditModal<?= $row->id ?>" class="btn btn-info icon icon-info" data-toggle="modal" data-target="#editarMascota"
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
                                                        data-tamano="<?= $row->tamano ?>"
                                                        data-region="<?= $row->region ?>"
                                                        data-ciudad="<?= $row->ciudad ?>"
                                                        data-comuna="<?= $row->comuna ?>">
                                                        <span class="material-icons" style="color: white;">
                                                            mode_edit
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a onclick="otorgarValorEliminar(this)" id="btnDeleteModal<?= $row->id ?>" class="btn btn-warning icon" data-toggle="modal" data-target="#eliminarMascota"
                                                        data-identificador="<?= $row->id ?>">
                                                        <span class="material-icons" style="color: white;">
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
        <!-- Modal - Editar Mascota -->
        <div class="modal fade" id="editarMascota" tabindex="-1" role="dialog" aria-labelledby="editarMascotaTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Mascota</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="editarMascota.php">
                            <div class="form-group">
                                <label for="formGroupExampleInput0">Id</label>
                                <input type="text" class="form-control" id="identificador" readonly>
                              </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput1">Nombre</label>
                              <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Region</label>
                                <input type="text" class="form-control" id="region">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Comuna</label>
                                <input type="text" class="form-control" id="comuna">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput4">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad">
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput5">Raza</label>
                              <input type="text" class="form-control" id="raza">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput6">Tipo</label>
                                <input type="text" class="form-control" id="tipo">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput7">Edad</label>
                                <input type="text" class="form-control" id="edad">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput8">Notas</label>
                                <input type="text" class="form-control" id="notas">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput9">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput10">Color</label>
                                <input type="text" class="form-control" id="color">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput11">Genero</label>
                                <input type="text" class="form-control" id="genero">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput12">Personalidad</label>
                                <input type="text" class="form-control" id="personalidad">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput13">Tamaño</label>
                                <input type="text" class="form-control" id="tamano">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button onclick="editarMascota(this)" type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Eliminar Mascota -->
        <div class="modal fade" id="eliminarMascota" tabindex="-1" role="dialog" aria-labelledby="eliminarMascotaTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Mascota</h5>
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
                        <button type="button" onclick="eliminarMascota()" class="btn btn-danger">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../controller/registrosMascotas.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
            $("#mascotasTable").DataTable({
                order: [[1, 'desc']],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });

        });
    </script>
</body>
</html>