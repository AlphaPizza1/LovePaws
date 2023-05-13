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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">Mi sitio web</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="home.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Acerca de nosotros</a>
				</li>
        <li class="nav-item">
					<a class="nav-link" href="registrarPersona.php">Formulario</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
  <div class="container mb-5 mt-5">

  <div class="container shadow-lg">
      <div class="row">
        <div class="col-md-12">
          <img src="../resources/adorable-bulldog-blanco-retrato-cachorro-banner-social.jpg" class="img-fluid">
        </div>
      </div>
      <div class="text-center py-3">
        <h2>REGISTRO DE ADOPTANTE</h2>
      </div>
      <hr>
      <div class="container py-2">
        <p class="font-weight-normal">Este formulario es importante para recopilar información del adoptante, como su experiencia previa con mascotas, su estilo de vida y su capacidad para brindar los cuidados necesarios al animal que se desea adoptar.</p>
        <p class="font-weight-normal">Los formularios de adoptante suelen ser utilizados por organizaciones de rescate de animales o por refugios para asegurarse de que las mascotas sean adoptadas por personas que puedan brindarles un hogar amoroso y adecuado.</p>
      </div>
      <div class="container pb-4">
        <h2>DATOS PERSONALES</h2>
        <hr>
        <form method="POST" action="../model/registrarPersona.php" id="registrarPersona">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputNombre">NOMBRE</label>
                <input type="text" class="form-control" id="inputNombre" name="inputNombre" maxlength="50" placeholder="Nombre" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputApellido">APELLIDO</label>
                <input type="text" class="form-control" id="inputApellido" name="inputApellido" maxlength="50" placeholder="Apellido" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputRut">RUT</label>
                <input type="text" class="form-control" id="inputRut" name="inputRut" placeholder="RUT" maxlength="12" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputFechaNacimiento">FECHA NACIMIENTO</label>
                <input type="date" class="form-control" id="inputFechaNacimiento" name="inputFechaNacimiento" placeholder="Fecha de Nacimiento" required>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputDireccion">DIRECCION</label>
                  <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" maxlength="250" placeholder="Direccion" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputRegion">REGION</label>
                <input type="text" class="form-control" id="inputRegion" name="inputRegion" placeholder="Region" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputCiudad">CIUDAD</label>
                <input type="text" class="form-control" id="inputCiudad" name="inputCiudad" placeholder="Ciudad" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputComuna">COMUNA</label>
                <input type="text" class="form-control" id="inputComuna" name="inputComuna" placeholder="Comuna" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputCodigoPostal">CODIGO POSTAL</label>
                <input type="number" class="form-control" id="inputCodigoPostal" name="inputCodigoPostal" placeholder="Codigo Postal" required>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEstadoCivil">ESTADO CIVIL</label>
              <!-- <input type="text" class="form-control" id="inputEstadoCivil" name="inputEstadoCivil" placeholder="Estado Civil" required> -->
              <select class="form-control" id="inputEstadoCivil" name="inputEstadoCivil" required>
                <option value="">Seleccione un estado civil</option>
                <option value="soltero">Soltero(a)</option>
                <option value="casado">Casado(a)</option>
                <option value="viudo">Viudo(a)</option>
                <option value="divorciado">Divorciado(a)</option>
                <option value="separado">Separado(a)</option>
              </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputProfesion">PROFESION | ESTUDIOS</label>
              <input type="text" class="form-control" id="inputProfesion" name="inputProfesion" placeholder="Profesion/Estudios" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail">EMAIL</label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="email@example.com" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputTelefono">TELEFONO</label>
                <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" placeholder="Telefono" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="inputTyC" name="inputTyC" required>
                    <label class="form-check-label" for="inputTyC">Acepto los términos y condiciones.</label>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="text-right">
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
          </div>
        </form>
      </div>
  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Registro exitoso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tu registro se ha completado exitosamente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <?php include 'footer.php' ?>
  <!-- Javascript Form Code -->
  <script src="../controller/registrarPersona.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>