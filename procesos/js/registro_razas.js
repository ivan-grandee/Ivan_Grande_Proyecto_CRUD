// Función para mostrar los errores
function gestionarError(idError, mensaje) {
    const contenedor = document.getElementById(idError);
    if (contenedor) {
        contenedor.textContent = mensaje;
        contenedor.style.color = "red";
    }
}


function validaNombre(){
    const valor = document.getElementById("username").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El nombre de usuario no puede estar vacío";
    } else if (valor.length < 3 ) {
        mensaje = "El nombre debe tener al menos 3 caracteres";
    } else if (valor.length > 30){
        mensaje = "El nombre no debe tener mas de 30 caracteres";
    } else if (!IsNan(valor)){
        mensaje = "El nombre no puede tener números";
    }
    gestionarError("error_usuario", mensaje);
}










