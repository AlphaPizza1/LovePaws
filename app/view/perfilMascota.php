<?php
    
    if(!isset($_GET['codigo'])){
        header('Location: catalogo.php?error=true');
        exit();
    }

    require '../model/Mascota.php';
    $codigo = $_GET['codigo'];
    $mascota = Mascota::obtenerMascota($codigo);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inicio - Mi sitio web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
</head>

<body>
	<!-- Navigation Bar -->
    <?php include 'navbar.php' ?>
    <div class="container-fluid d-flex flex-wrap py-3">
        <div class="container my-5 card shadow p-5">
            <div class="row">
                <h1>Perfil Mascota</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- <ul>
                        <li>Nombre: <?php echo $mascota->nombre?></li>
                        <li>Raza: <?php echo $mascota->raza?></li>
                        <li>Edad: <?php echo $mascota->edad?> años</li>
                        <li>Color: <?php echo $mascota->color?></li>
                    </ul> -->
                    <div class="container d-flex flex-wrap pl-0">
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Nombre:</b> <?php echo $mascota->nombre?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Edad:</b> <?php echo $mascota->edad?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Region:</b> <?php echo $mascota->region?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Comuna:</b> <?php echo $mascota->comuna?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Ciudad:</b> <?php echo $mascota->ciudad?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Raza:</b> <?php echo $mascota->raza?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Color:</b> <?php echo $mascota->color?></span>
                        </div>
                        <div class="col-6 pl-0 pb-4">
                            <span class="text-small"><b>Genero:</b> <?php echo $mascota->genero?></span>
                        </div>
                        <div class="col-12 pl-0 pb-4 pt-3">
                            <span class="text-small">*<?php echo $mascota->descripcion?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 shadow p-0">
                    <img src="../resources/fotos/<?= $mascota->imagen_url ?>" class="img-fluid" alt="Imagen de la mascota"/>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 pl-0 pr-0 pt-3">
                    <button class="btn btn-primary btn-md btn-block">Adoptame</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>