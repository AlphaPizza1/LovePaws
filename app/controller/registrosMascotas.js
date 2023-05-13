function prepopularEdicion(evt){
    console.log('Editar Mascota');
    var identificador = evt.getAttribute("data-identificador");
    var nombre = evt.getAttribute("data-nombre");
    var raza = evt.getAttribute("data-raza");
    var tipo = evt.getAttribute("data-tipo");
    var edad = evt.getAttribute("data-edad");
    var notas = evt.getAttribute("data-notas");
    var descripcion = evt.getAttribute("data-descripcion");
    var color = evt.getAttribute("data-color");
    var genero = evt.getAttribute("data-genero");
    var personalidad = evt.getAttribute("data-personalidad");
    var tamano = evt.getAttribute("data-tamano");
    var region = evt.getAttribute("data-region");
    var ciudad = evt.getAttribute("data-ciudad");
    var comuna = evt.getAttribute("data-comuna");
    $("#identificador").val(identificador);
    $("#nombre").val(nombre);
    $("#raza").val(raza);
    $("#tipo").val(tipo);
    $("#edad").val(edad);
    $("#notas").val(notas);
    $("#descripcion").val(descripcion);
    $("#color").val(color);
    $("#genero").val(genero);
    $("#personalidad").val(personalidad);
    $("#tamano").val(tamano);
    $("#region").val(region);
    $("#ciudad").val(ciudad);
    $("#comuna").val(comuna);
};

function editarMascota(){
    var identificador = document.getElementById("identificador").value;
    var nombre = document.getElementById("nombre").value;
    var raza = document.getElementById("raza").value;
    var tipo = document.getElementById("tipo").value;
    var edad = document.getElementById("edad").value;
    var notas = document.getElementById("notas").value;
    var descripcion = document.getElementById("descripcion").value;
    var color = document.getElementById("color").value;
    var genero = document.getElementById("genero").value;
    var personalidad = document.getElementById("personalidad").value;
    var tamano = document.getElementById("tamano").value;
    var region = document.getElementById("region").value;
    var ciudad = document.getElementById("ciudad").value;
    var comuna = document.getElementById("comuna").value;

    window.location.href = 'http://localhost/portfolio/app/model/editarMascota.php?identificador='+identificador+'&nombre='+nombre+'&raza='+raza+'&tipo='+tipo+'&edad='+edad+'&notas='+notas+'&descripcion='+descripcion+'&color='+color+'&genero='+genero+'&personalidad='+personalidad+'&tamano='+tamano+'&region='+region+'&ciudad='+ciudad+'&comuna='+comuna;
}

function otorgarValorEliminar(evt){
    var identificador = evt.getAttribute("data-identificador");
    $("#identificadorEliminar").val(identificador);
    console.log('Eliminar Mascota', identificador);
}

function eliminarMascota(){
    var identificador = document.getElementById("identificadorEliminar").value;
    window.location.href = 'http://localhost/portfolio/app/model/eliminarMascota.php?identificador='+identificador;
}