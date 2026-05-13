// Función para mostrar los errores
function gestionarError(idError, mensaje) {
    const contenedor = document.getElementById(idError);
    if (contenedor) {
        contenedor.textContent = mensaje;
        contenedor.style.color = mensaje === "" ? "" : "red";
    }
}

// nombre — VARCHAR(40)
function validaNombre() {
    const valor = document.getElementById("username").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El nombre no puede estar vacío";
    } else if (valor.length < 3) {
        mensaje = "El nombre debe tener al menos 3 caracteres";
    } else if (valor.length > 40) {
        mensaje = "El nombre no debe tener más de 40 caracteres";
    } else if (!isNaN(valor)) {
        mensaje = "El nombre no puede ser solo números";
    }
    gestionarError("error_usuario", mensaje);
}

// Comportamiento_raza — VARCHAR(100)
function validaComportamiento() {
    const valor = document.getElementById("comportamiento").value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El comportamiento no puede estar vacío";
    } else if (valor.length > 100) {
        mensaje = "El comportamiento no puede superar los 100 caracteres";
    }
    gestionarError("error_comportamiento", mensaje);
}

// Tamaño_raza — ENUM('Pequeño', 'Mediano', 'Grande', 'Gigante')
function validaTamaño() {
    const valor = document.getElementById("tamaño").value;
    const opcionesValidas = ["Pequeño", "Mediano", "Grande", "Gigante"];
    let mensaje = "";

    if (valor === "" || valor === null) {
        mensaje = "Debes seleccionar un tamaño";
    } else if (!opcionesValidas.includes(valor)) {
        mensaje = "Tamaño no válido. Opciones: Pequeño, Mediano, Grande, Gigante";
    }
    gestionarError("error_tamaño", mensaje);
}

// Peso_raza — VARCHAR(10), ej: "5-10 kg"
function validaPeso() {
    const valor = document.getElementById("peso").value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El peso no puede estar vacío";
    } else if (valor.length > 10) {
        mensaje = "El peso no puede superar los 10 caracteres (ej: '5-10 kg')";
    }
    gestionarError("error_peso", mensaje);
}

// Caract_generales — VARCHAR(100)
function validaCaract() {
    const valor = document.getElementById("caract").value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "Las características no pueden estar vacías";
    } else if (valor.length > 100) {
        mensaje = "Las características no pueden superar los 100 caracteres";
    }
    gestionarError("error_caract", mensaje);
}

// esperanza_vida — VARCHAR(10), ej: "10-15 años"
function validaEsperanza() {
    const valor = document.getElementById("esperanza").value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "La esperanza de vida no puede estar vacía";
    } else if (valor.length > 10) {
        mensaje = "La esperanza de vida no puede superar los 10 caracteres (ej: '10-15 años')";
    }
    gestionarError("error_esperanza", mensaje);
}