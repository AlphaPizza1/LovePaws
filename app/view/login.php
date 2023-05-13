<?php
    session_start();
    require '../model/Conexion.php';
    if(!empty($_POST['inputUsuario']) && !empty($_POST['inputPassword'])){
        $conexion = new Conexion();
        $records = $conexion->prepare('SELECT id, email, administrador, password FROM usuarios WHERE email = :inputUsuario');
        $records->bindParam(':inputUsuario', $_POST['inputUsuario']);
        $records->execute();
        echo 'debug';
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';
        if($results != null){
            if(count($results) > 0){
                if(password_verify($_POST['inputPassword'], $results['password'])){
                    $_SESSION['user_id'] = $results['id'];
                    if($results['administrador']){
                        header('Location: ./dashboard.php');
                    }else{
                        header('Location: ./home.php');
                    }
                    
                 }else{
                     $message = 'Tus credenciales no coinciden.';        
                 }
            }else{
                $message = 'Tus credenciales no coinciden.';
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/home.css">
</head>
<body class="bg-light">
    <!-- Alternative Dark Navbar -->
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
                                    <img src="../resources/undraw_Good_doggy_re_eet7.png" alt="login" class="img-fluid p-5">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="m-5 text-left">
                                    <h2>Bienvenido de vuelta!</h2>
                                </div>
                                <?php $message?>
                                <form action="login.php" method="POST" class="m-5">
                                    <div class="mb-3">
                                        <label class="form-label" for="usuario">Usuario</label>
                                        <input class="form-control" type="text" id=usuario name="inputUsuario">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input class="form-control" type="password" id=password name="inputPassword">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="text-end">
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                        </div>
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
    <?php include 'footer.php' ?>
</body>
</html>