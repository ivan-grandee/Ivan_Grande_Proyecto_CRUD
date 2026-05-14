// Función para mostrar los errores
function gestionarError(idError, mensaje) {
    const contenedor = document.getElementById(idError);
    if (contenedor) {
        contenedor.textContent = mensaje;
        contenedor.style.color = "red";
    }
}


function validaNombre(){
    const valor = document.getElementById("nombre").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El nombre no puede estar vacío";
    } else if (valor.length < 3 ) {
        mensaje = "El nombre debe tener al menos 3 caracteres";
    } else if (valor.length > 30){
        mensaje = "El nombre no debe tener mas de 30 caracteres";
    } else if (!IsNan(valor)){
        mensaje = "El nombre no puede tener números";
    }
    gestionarError("error_usuario", mensaje);
}

function validaApellido(){
    const valor = document.getElementById("apellido").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El apellido no puede estar vacío";
    } else if (valor.length < 3 ) {
        mensaje = "El apellido debe tener al menos 3 caracteres";
    } else if (valor.length > 30){
        mensaje = "El apellido no debe tener mas de 30 caracteres";
    } else if (!IsNan(valor)){
        mensaje = "El apellido no puede tener números";
    }
    gestionarError("error_apellido", mensaje);
}

function validaEmail(){
    const valor = document.getElementById("email").value; 
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let mensaje = ""; 

    if (valor.length === 0) {
        mensaje = "El email no puede estar vacío";
    } else if (!regex.test(valor)) {
        mensaje = "El formato del email no es válido";
    }
    gestionarError("error_email", mensaje);
}

function validaDNI() {
    
    const elementoDNI = document.getElementById("dni");
    const valor = elementoDNI.value.toUpperCase();
    const regex = /^\d{8}[A-Z]$/;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El DNI no puede estar vacío";
    } else if (!regex.test(valor)) {
        mensaje = "Formato inválido (8 números y 1 letra)";
    } else {
        const letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        const numero = valor.substr(0, 8);
        const letraEnviada = valor.substring(8, 9);
        const letraCorrecta = letras[numero % 23];

        if (letraEnviada !== letraCorrecta) {
            
            mensaje = `La letra para ${numero} no es ${letraEnviada}`;
        }
    }
    gestionarError("error_dni", mensaje);
}

function validaTelefono() {
    const valor = document.getElementById("telf");
    const regex = /^[0-9]{9}$/; 
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El teléfono no puede estar vacío";
    } else if (!regex.test(valor)) {
        mensaje = "El teléfono debe tener 9 números sin espacios";
    }
    gestionarError("error_telefono", mensaje);
}