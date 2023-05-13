<?php
require '../model/Mascota.php';

$listaMascotas = Mascota::obtenerMascotas();
$totalMascotas = count($listaMascotas);

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
    
    <!-- <div class="container d-flex flex-wrap">
        <div class="col-sm-12 col-lg-3">
            <form method="get" action="filter.php">
                <div class="form-group">
                  <label for="tipo">Tipo de mascota:</label>
                  <select name="tipo" id="tipo" class="form-control">
                    <option value="">Seleccione un tipo</option>
                    <option value="perro">Perro</option>
                    <option value="gato">Gato</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
    
                <div class="form-group">
                  <label for="raza">Raza de mascota:</label>
                  <input type="text" name="raza" id="raza" class="form-control">
                </div>
    
                <div class="form-group">
                  <label for="edad">Edad de la mascota:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="number" name="edad_min" id="edad_min" class="form-control" placeholder="Edad mínima">
                    </div>
                  </div>
                </div>
    
                <div class="form-group">
                  <label for="genero">Género de la mascota:</label>
                  <div class="form-check">
                    <input type="radio" name="genero" id="genero_macho" class="form-check-input" value="macho">
                    <label for="genero_macho" class="form-check-label">Macho</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="genero" id="genero_hembra" class="form-check-input" value="hembra">
                    <label for="genero_hembra" class="form-check-label">Hembra</label>
                  </div>
                </div>
    
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="..." alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                  This is some content from a media component. You can replace this with any content and adjust it as needed.
                </div>
              </div>
        </div>
    </div> -->
    <div class="container-fluid d-flex flex-wrap py-3">
        <div class="col-sm-12 col-lg-3 py-5 px-5">
            <div class="card p-5">
                <form method="get" action="filter.php">
                    <div class="form-group">
                      <label for="tipo">Tipo de mascota:</label>
                      <select name="tipo" id="tipo" class="form-control">
                        <option value="">Seleccione un tipo</option>
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                        <option value="otro">Otro</option>
                      </select>
                    </div>
        
                    <div class="form-group">
                      <label for="raza">Raza de mascota:</label>
                      <input type="text" name="raza" id="raza" class="form-control">
                    </div>
        
                    <div class="form-group">
                      <label for="edad">Edad de la mascota:</label>
                      <div class="row">
                        <div class="col-12">
                          <input type="number" name="edad_min" id="edad_min" class="form-control" placeholder="Edad mínima">
                        </div>
                      </div>
                    </div>
        
                    <div class="form-group">
                      <label for="genero">Género de la mascota:</label>
                      <div class="form-check">
                        <input type="radio" name="genero" id="genero_macho" class="form-check-input" value="macho">
                        <label for="genero_macho" class="form-check-label">Macho</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="genero" id="genero_hembra" class="form-check-input" value="hembra">
                        <label for="genero_hembra" class="form-check-label">Hembra</label>
                      </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Filtrar</button>
                </form>
            </div>
            
        </div>
        <div class="col-sm-12 col-lg-9 row d-flex">
            <div class="col-sm-12 col-lg-12">
                <h2>Mascotas</h2>
                <p class="text-small">Todos nuestros animales han sido examinados por veterinarios y se encuentran en buenas condiciones de salud. Además, han sido tratados con amor y respeto mientras estuvieron bajo nuestro cuidado. Cada mascota tiene su propia personalidad y necesidades, por lo que te recomendamos que elijas la que mejor se adapte a tu estilo de vida y capacidad para cuidarla.</p>
        </div>

    <!-- Previos Login -->
    <section class="d-flex flex-column justify-content-center align-items-center px-4">
        <div class="">
            <?php foreach ($listaMascotas as $row) { ?>
                <div class="row pb-5">
                    <div class="col-12 mx-auto rounded shadow bg-white">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <img src="../resources/fotos/<?= $row->imagen_url ?>" alt="login" class="img-fluid"/>
                            </div>  
                            <div class="col-md-8 py-3">
                                <h4><?= $row->nombre ?></h4>
                                <div class="container d-flex flex-wrap">
                                        <div class="col-6">
                                            <p class="text-small">Raza: <?= $row->raza ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-small">Personalidad: <?= $row->personalidad ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-small">Color: <?= $row->color ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-small">Tamaño: <?= $row->tamano ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-small">Genero: <?= $row->genero ?></p>
                                        </div>
                                </div>
                                <div class="container justify-center">
                                    <a href="perfilMascota.php?codigo=<?= $row->id ?>" class="btn btn-warning">Ver Perfil</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
            
            <div class="col-sm-12 col-lg-12 pb-5">
                <!-- <div class="card">
                    <div class="col-sm-4">
                        <img src="../resources/pexels-helena-lopes-1938123.jpg" width="100%" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                    </div>
                </div> -->
            </div>
            <div class="col-sm-12 col-lg-12">
                <!-- <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div> -->
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>