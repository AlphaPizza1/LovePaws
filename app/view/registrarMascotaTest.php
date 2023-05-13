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
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
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
                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="col">
                                <div class="m-4 text-left">
                                    <h2>Registrar Mascota</h2>
                                </div>
                                <hr class="w-75" style="margin-left:10% !important; margin-right:10% !important;" />
                                <div class="container pb-4">
                                  <form method="POST" action="../model/registrarMascota.php" id="registrarMascota">
                                    <div class="form-row pb-3 d-flex">
                                        <div class="form-group col-md-6 px-2">
                                          <label for="inputNombre">Nombre</label>
                                          <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-md-6 px-2">
                                          <label for="inputEdad">Edad</label>
                                          <input type="text" class="form-control" id="inputEdad" name="inputEdad" placeholder="Edad" required>
                                        </div>
                                    </div>
                                    <div class="form-row pb-3 px-2">
                                      <div class="form-group col-md-12">
                                        <label for="inputTipoMascota">Tipo de Mascota</label>
                                        <select class="form-select" id="inputTipoMascota" name="inputTipoMascota">
                                          <option value="" selected>--Seleccionar Tipo de Mascota--</option>
                                          <option value="Gato">Gato</option>
                                          <option value="Perro">Perro</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-row pb-3 d-flex">
                                      <div class="form-group col-md-6 px-2">
                                        <label for="inputRaza">Raza</label>
                                        <input type="text" class="form-control" id="inputRaza" name="inputRaza" placeholder="Raza" required>
                                      </div>
                                      <div class="form-group col-md-6 px-2">
                                        <label for="inputColor">Color</label>
                                        <input type="text" class="form-control" id="inputColor" name="inputColor" placeholder="Color" required>
                                      </div>
                                    </div>
                                    <div class="form-row pb-3 d-flex">
                                      <div class="form-group col-md-6 px-2">
                                        <label for="inputPersonalidad">Personalidad</label>
                                        <input type="text" class="form-control" id="inputPersonalidad" name="inputPersonalidad" placeholder="Personalidad" required>
                                      </div>
                                      <div class="form-group col-md-6 px-2">
                                        <label for="inputTamano">Tamaño</label>
                                        <input type="text" class="form-control" id="inputTamano" name="inputTamano" placeholder="Tamaño" required>
                                      </div>
                                    </div>
                                    <div class="form-row pb-3 d-flex">
                                      <div class="form-group col-md-6 px-2">
                                        <label for="inputGenero">Genero</label>
                                        <input type="text" class="form-control" id="inputGenero" name="inputGenero" placeholder="Genero" required>
                                      </div>
                                      <!-- <div class="form-group col-md-6 px-2">
                                        <label for="inputCategoria">Categoria</label>
                                        <select class="form-select" id="inputCategoria" name="inputCategoria">
                                          <option value="" selected>--Seleccionar Categoria--</option>
                                          <option value="Gato">Gato</option>
                                          <option value="Perro">Perro</option>
                                        </select>
                                      </div> -->
                                    </div>
                                    <div class="form-row pb-3">
                                      <div class="form-group col-md-12 px-2">
                                        <label for="inputDescripcion">Descripcion</label>
                                        <textarea class="form-control" id="inputDescripcion" name="inputDescripcion" placeholder="Descripcion" aria-label="With textarea" required></textarea>
                                      </div>
                                    </div>
                                    <div class="form-row pb-3">
                                        <div class="form-group col-md-12 px-2">
                                            <label for="inputNotas">Notas</label>
                                            <textarea type="text" class="form-control" id="inputNotas" name="inputNotas" placeholder="Notas"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row pb-3 px-2">
                                        <div class="form-group col-md-12">
                                            <label for="inputImagen" class="form-label">Agregar imagen de la mascota</label>
                                            <input type="file" class="form-control" id="inputImagen" name="inputImagen" placeholder="Imagen">
                                        </div>
                                    </div>
                                    <div class="form-row py-3 px-2">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-success btn-block w-100">Registrar</button>
                                      </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-5 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Activities</h4>
                            </div>
                            <div class="card-content">
                                <div class="streamline">
                                    <div class="sl-item sl-primary">
                                        <div class="sl-content">
                                            <small class="text-muted">5 mins ago</small>
                                            <p>Williams has just joined Project X</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-danger">
                                        <div class="sl-content">
                                            <small class="text-muted">25 mins ago</small>
                                            <p>Jane has sent a request for access to the project folder</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-success">
                                        <div class="sl-content">
                                            <small class="text-muted">40 mins ago</small>
                                            <p>Kate added you to her team</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <small class="text-muted">45 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                    <div class="sl-item sl-warning">
                                        <div class="sl-content">
                                            <small class="text-muted">55 mins ago</small>
                                            <p>Jim shared a folder with you</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <small class="text-muted">60 minutes ago</small>
                                            <p>John has finished his task</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>
                
                <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        <li>
                                            <a href="#">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Company
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="col-md-6">
                                <p class="copyright d-flex justify-content-end"> &copy 2021 Design by
                                    <a href="#">Vishweb Design</a> BootStrap Admin Dashboard
                                </p>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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