<!-- Add New Members -->
<div class="card">
    <div class="card-header">
        Register Member
    </div>
    <div class="card-body">
        <!-- Success Alert -->
        <?php
        if (isset($_GET['success']) and $_GET['success'] == 'true') {

        ?>
            <div class="alert alert-success alert-dismissable fade show text-center" role="alert">
                <strong>Great,</strong> A new patient has been added!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
        }
        ?>
        <!-- Error Alert -->
        <?php
        if (isset($_GET['error']) and $_GET['error'] == 'true') {

        ?>
            <div class="alert alert-danger alert-dismissable fade show text-center" role="alert">
                <strong>Error..</strong> It seems you missed required fields.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
        }
        ?>
        <!-- Register Patient Form -->
        <form method="POST" action="../model/registerPatient.php" id="registerPatient" class="p-4">
            <div class="form-group">
                <label for="txtRUT">RUT</label>
                <input type="text" class="form-control" id="txtRUT" aria-describedby="RUT" name="txtRUT" placeholder="Ingrese RUT">
            </div>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" aria-describedby="Nombre" name="txtNombre" placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
                <label for="txtApellido">Apellido</label>
                <input type="text" class="form-control" id="txtApellido" aria-describedby="Apellido" name="txtApellido" placeholder="Ingrese apellido">
            </div>
            <div class="form-group">
                <label for="txtDireccion">Direccion</label>
                <input type="text" class="form-control" id="txtDireccion" aria-describedby="Direccion" name="txtDireccion" placeholder="Ingrese direccion">
            </div>
            <div class="form-group">
                <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="txtFechaNacimiento" aria-describedby="Apellido" name="txtFechaNacimiento" placeholder="Ingrese fecha de nacimiento">
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>