
<?php
    require '../model/Conexion.php';
    $message = '';

    if(!empty($_POST['inputEmail']) && !empty($_POST['inputPassword']) && !empty($_POST['inputPasswordConfirm'])){
        $email = $_POST['inputEmail'];
        $password = password_hash($_POST['inputPassword'], PASSWORD_BCRYPT);

        $conexion = new Conexion();
        $query = $conexion->prepare("INSERT INTO usuarios(email, password) VALUES (?,?)");
        $result = $query->execute([$email,$password]);

        if($result === TRUE){
            $message = 'Se ha creado su usuario correctamente';
          }else{
            $message = 'Ha ocurrido un error al crear su usuario';
          }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
</head>
<body class="bg-light">
    <!-- Alternative Navbar Dark -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">LOVE PAWS</a>
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
    <!-- Previos Login -->
    <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto rounded shadow bg-white">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <img src="../resources/undraw_Modern_design_re_dlp8.png" alt="login" class="img-fluid p-5">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="m-5 text-left">
                                    <h2>Registrate</h2>
                                </div>
                                <?php if(!empty($message)):?>
                                <div class="row">
                                    <p><?php $message ?></p>
                                </div>
                                <?php endif; ?>
                                <form action="signup.php" method="POST" class="m-5">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="text" id=email name="inputEmail">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input class="form-control" type="password" id=password name="inputPassword">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="passwordConfirm">Confirmar Contraseña</label>
                                        <input class="form-control" type="password" id=passwordConfirm name="inputPasswordConfirm">
                                    </div>
                                    <div class="row justfiy-content-center">
                                        <div class="col-12">
                                            <button type="submit" class="form-control btn btn-primary mt-3">Ingresar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- <div id="popup" class="popup">
        <img src="../resources/404-tick.png">
        <h2>Gracias!</h2>
        <p>Tus datos se han enviado correctamente, gracias!</p>
        <button type="button" onclick="closePopup()">Ok</button>
    </div> -->
      <?php include 'footer.php' ?>
  
      <!-- <script>
        let popup = document.getElementById("popup");
  
        function openPopup(){
          popup.classList.add("open-popup");
        }
  
        function closePopup(){
          popup.classList.remove("open-popup");
        }
      </script> -->
</body>
</html>