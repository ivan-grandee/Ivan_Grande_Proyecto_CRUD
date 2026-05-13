// Función para mostrar los errores
function gestionarError(idError, mensaje) {
    const contenedor = document.getElementById(idError);
    if (contenedor) {
        contenedor.textContent = mensaje;
        contenedor.style.color = mensaje === "" ? "" : "red";
    }
}

// nombre — VARCHAR(50)
function validaNombre() {
    const valor = document.getElementById("username").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El nombre de usuario no puede estar vacío";
    } else if (valor.length < 3) {
        mensaje = "El nombre debe tener al menos 3 caracteres";
    } else if (valor.length > 50) {
        mensaje = "El nombre no debe tener más de 50 caracteres";
    } else if (!isNaN(valor)) {
        mensaje = "El nombre no puede ser solo números";
    }
    gestionarError("error_usuario", mensaje);
}

// email — VARCHAR(50)
function validaEmail() {
    const valor = document.getElementById("email").value;
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El email no puede estar vacío";
    } else if (valor.length > 50) {
        mensaje = "El email no puede superar los 50 caracteres";
    } else if (!regex.test(valor)) {
        mensaje = "El formato del email no es válido";
    }
    gestionarError("error_email", mensaje);
}

// contraseña — VARCHAR(255) (se guarda hasheada)
function validaPassword() {
    const valor = document.getElementById("password").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "La contraseña es obligatoria";
    } else if (valor.length < 6) {
        mensaje = "La contraseña debe tener al menos 6 caracteres";
    } else if (valor.length > 255) {
        mensaje = "La contraseña no puede superar los 255 caracteres";
    } else if (!valor.match(/\d/)) {
        mensaje = "La contraseña debe contener al menos 1 número";
    } else if (!valor.match(/[a-zA-Z]/)) {
        mensaje = "La contraseña debe contener al menos 1 letra";
    } else if (!valor.match(/[A-Z]/)) {
        mensaje = "La contraseña debe contener al menos 1 mayúscula";
    }
    gestionarError("error_password", mensaje);
}

function validaConPass() {
    const valor = document.getElementById("confirmar_password").value;
    const contra = document.getElementById("password").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "La confirmación de contraseña es obligatoria";
    } else if (valor.length < 6) {
        mensaje = "La contraseña debe tener al menos 6 caracteres";
    } else if (valor.length > 255) {
        mensaje = "La contraseña no puede superar los 255 caracteres";
    } else if (!valor.match(/\d/)) {
        mensaje = "La contraseña debe contener al menos 1 número";
    } else if (!valor.match(/[a-zA-Z]/)) {
        mensaje = "La contraseña debe contener al menos 1 letra";
    } else if (!valor.match(/[A-Z]/)) {
        mensaje = "La contraseña debe contener al menos 1 mayúscula";
    } else if (contra !== valor) {
        mensaje = "Las contraseñas no coinciden";
    }
    gestionarError("error_confirmar_password", mensaje);
}
