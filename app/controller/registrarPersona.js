// Obtener el input de RUT por su id
const rutInput = document.getElementById("inputRut");
  
// Agregar un evento de entrada para el input de RUT
rutInput.addEventListener("input", function() {
  // Obtener el valor actual del input
  let rutValue = this.value;
  
  // Eliminar todos los caracteres que no sean números o letras K
  rutValue = rutValue.replace(/[^0-9kK]/g, "");
  
  // Dividir el RUT en su número y dígito verificador
  const rutNumber = rutValue.slice(0, -1);
  const rutDV = rutValue.slice(-1).toUpperCase();
  
  // Formatear el RUT con puntos y guión
  let formattedRut = "";
  if(rutNumber.length > 0){
    for (let i = rutNumber.length - 1, j = 0; i >= 0; i--, j++) {
        const digit = rutNumber.charAt(i);
        formattedRut = digit + formattedRut;
        if (j === 2 || j === 5) {
          formattedRut = "." + formattedRut;
        }
      }
      formattedRut = formattedRut + "-" + rutDV;
      
      // Establecer el valor formateado en el input de RUT
      this.value = formattedRut;
  }
});

