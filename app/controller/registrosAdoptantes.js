function prepopularEdicion(evt){
    console.log('Editar Adoptante');
    var identificador = evt.getAttribute("data-identificador");
    var nombre = evt.getAttribute("data-nombre");
    var apellido = evt.getAttribute("data-apellido");
    var direccion = evt.getAttribute("data-direccion");
    var region = evt.getAttribute("data-region");
    var ciudad = evt.getAttribute("data-ciudad");
    var estadocivil = evt.getAttribute("data-estadocivil");
    var profesion = evt.getAttribute("data-profesion");
    var telefono = evt.getAttribute("data-telefono");
    var email = evt.getAttribute("data-email");
    $("#identificador").val(identificador);
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $("#direccion").val(direccion);
    $("#region").val(region);
    $("#ciudad").val(ciudad);
    $("#estadocivil").val(estadocivil);
    $("#profesion").val(profesion);
    $("#telefono").val(telefono);
    $("#email").val(email);
};

function editarAdoptante(){
    var identificador = document.getElementById("identificador").value;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var direccion = document.getElementById("direccion").value;
    var region = document.getElementById("region").value;
    var ciudad = document.getElementById("ciudad").value;
    var estadocivil = document.getElementById("estadocivil").value;
    var profesion = document.getElementById("profesion").value;
    var telefono = document.getElementById("telefono").value;
    var email = document.getElementById("email").value;

    window.location.href = 'http://localhost/portfolio/app/model/editarAdoptante.php?identificador='+identificador+'&nombre='+nombre+'&apellido='+apellido+'&direccion='+direccion+'&region='+region+'&ciudad='+ciudad+'&estadocivil='+estadocivil+'&profesion='+profesion+'&telefono='+telefono+'&email='+email;
}

function otorgarValorEliminar(evt){
    var identificador = evt.getAttribute("data-identificador");
    $("#identificadorEliminar").val(identificador);
    console.log('Eliminar Adoptante', identificador);
}

function eliminarAdoptante(){
    var identificador = document.getElementById("identificadorEliminar").value;
    window.location.href = 'http://localhost/portfolio/app/model/eliminarAdoptante.php?identificador='+identificador;
}