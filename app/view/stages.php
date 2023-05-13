<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
  <body>
    <!-- Navbar -->
    <?php include 'navbar.php' ?>
    <!-- First Section -->
	<main>
		<section>
      <div class="container-fluid py-5">
        <!-- ETAPA 1 -->
        <div class="row">
          <div class="col-md">
            <div class="row">
                <div class="col text-center">
                    <img src="../resources/dog-1.png" style="width: 400px;" alt="Este es un perrito"><br><br>
                </div>
            </div>
          </div>
          <div class="col-md">
            <div class="text-left">
                <h2>IDENTIFICACIÓN<br><small class="text-muted">ETAPA UNO</small></h2>
                <h6 class="text-muted">_________</h6>
            </div>
            <div class="text-left">
                <p>La primera etapa es identificar a un animal que necesita rescate. Esto puede suceder de diferentes maneras, como encontrar a un animal en la calle, recibir una notificación de un animal abandonado, o tomar un animal de un refugio que está sobrepoblado.</p>
                <button type="button" class="btn btn-outline-dark">Informate</button>
            </div>
          </div>
        </div>
        <!-- ETAPA 2 -->
        <div class="row">
              <div class="col-md">
                <div class="text-right">
                    <h2>EVALUACIÓN<br><small class="text-muted">ETAPA DOS</small></h2>
                    <h6 class="text-muted">_________</h6>
                </div>
                <div class="text-right">
                    <p>Una vez que se identifica al animal, se lleva a cabo una evaluación para determinar su estado de salud, temperamento, y necesidades médicas. Esto puede incluir exámenes veterinarios, pruebas de salud, y análisis de comportamiento.</p>
                    <button type="button" class="btn btn-outline-dark">Campañas</button><br><br>
                </div>
              </div>
              <div class="col-md">
                <div class="row">
                    <div class="col text-center">
                        <img src="../resources/crowfunding.jpg" style="height: 300px;" alt="Esto es un plato con comida para perros">
                    </div>
                </div>
              </div>
        </div>
        <!-- ETAPA 3 -->
        <div class="row">
          <div class="col-md">
            <div class="text-right">
                <h2>TRATAMIENTO<br><small class="text-muted">ETAPA TRES</small></h2>
                <h6 class="text-muted">_________</h6>
            </div>
            <div class="text-right">
                <p>Si se determina que el animal necesita tratamiento médico, se le brinda atención veterinaria para tratar cualquier enfermedad o lesión que tenga.</p>
                <button type="button" class="btn btn-outline-dark">Campañas</button><br><br>
            </div>
          </div>
          <div class="col-md">
            <div class="row">
                <div class="col text-center">
                    <img src="../resources/crowfunding.jpg" style="height: 300px;" alt="Esto es un plato con comida para perros">
                </div>
            </div>
          </div>
        </div>
        <!-- ETAPA 4 -->
        <div class="row">
          <div class="col-md">
            <div class="text-right">
                <h2>CUIDADO TEMPORAL<br><small class="text-muted">ETAPA CUATRO</small></h2>
                <h6 class="text-muted">_________</h6>
            </div>
            <div class="text-right">
                <p>Si el animal no puede ser adoptado inmediatamente, se coloca en un hogar temporal donde recibe cuidado y atención hasta que se pueda encontrar un hogar permanente.</p>
                <button type="button" class="btn btn-outline-dark">Campañas</button><br><br>
            </div>
          </div>
          <div class="col-md">
            <div class="row">
                <div class="col text-center">
                    <img src="../resources/crowfunding.jpg" style="height: 300px;" alt="Esto es un plato con comida para perros">
                </div>
            </div>
          </div>
        </div>
        <!-- ETAPA 5 -->
        <div class="row">
          <div class="col-md">
            <div class="text-right">
                <h2>ADOPCIÓN<br><small class="text-muted">ETAPA CINCO</small></h2>
                <h6 class="text-muted">_________</h6>
            </div>
            <div class="text-right">
                <p>Cuando el animal está listo para ser adoptado, se publica información sobre el animal en línea o en persona. Los posibles adoptantes pueden conocer al animal y tomar una decisión informada sobre si es una buena opción para ellos.</p>
                <button type="button" class="btn btn-outline-dark">Campañas</button><br><br>
            </div>
          </div>
          <div class="col-md">
            <div class="row">
                <div class="col text-center">
                    <img src="../resources/crowfunding.jpg" style="height: 300px;" alt="Esto es un plato con comida para perros">
                </div>
            </div>
          </div>
        </div>
        <!-- ETAPA 6 -->
        <div class="row">
          <div class="col-md">
            <div class="text-right">
                <h2>SEGUIMIENTO<br><small class="text-muted">ETAPA SEIS</small></h2>
                <h6 class="text-muted">_________</h6>
            </div>
            <div class="text-right">
                <p>Finalmente, se realiza un seguimiento para asegurarse de que el animal está ajustándose bien a su nuevo hogar y familia. Si hay algún problema, se trabaja con el adoptante para resolverlo.</p>
                <button type="button" class="btn btn-outline-dark">Campañas</button><br><br>
            </div>
          </div>
          <div class="col-md">
            <div class="row">
                <div class="col text-center">
                    <img src="../resources/crowfunding.jpg" style="height: 300px;" alt="Esto es un plato con comida para perros">
                </div>
            </div>
          </div>
        </div>
      </div>
		</section>
	</main>
    <!-- Footer -->
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>