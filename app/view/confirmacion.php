<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Confirmacion de Registro</title>
  </head>
<body>
  <!-- Crea un modal con el mensaje de confirmación -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <h2>¡Registro exitoso!</h2>
      <p>Gracias por registrarte en nuestro sitio web.</p>
      <div class="">
        <a href="home.php" class="btn btn-md btn-success">Success</a>
      </div>
    </div>
  </div>

  <!-- Incluye los estilos CSS para el modal -->
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
    #closeModal {
      margin-top: 10px;
      padding: 10px;
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>

  <!-- Incluye el script para mostrar el modal automáticamente -->
  <script>
    // Muestra el modal automáticamente al cargar la página
    document.addEventListener("DOMContentLoaded", function(event) {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    });

    // Cierra el modal al hacer clic en el botón
    var closeModal = document.getElementById("closeModal");
    closeModal.onclick = function() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    };
  </script>
</body>
</html>
