// Función para mostrar los errores
function gestionarError(idError, mensaje) {
    const contenedor = document.getElementById(idError);
    if (contenedor) {
        contenedor.textContent = mensaje;
        contenedor.style.color = mensaje === "" ? "" : "red";
    }
}

// Nombre — VARCHAR(45)
function validaNombre() {
    const valor = document.getElementById("username").value;
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El nombre no puede estar vacío";
    } else if (valor.length < 3) {
        mensaje = "El nombre debe tener al menos 3 caracteres";
    } else if (valor.length > 45) {
        mensaje = "El nombre no debe tener más de 45 caracteres";
    } else if (!isNaN(valor)) {
        mensaje = "El nombre no puede ser solo números";
    }
    gestionarError("error_usuario", mensaje);
}

// Chip — CHAR(15), solo números
function validaChip() {
    const elementoCHIP = document.getElementById("chip");
    const valor = elementoCHIP.value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "El chip no puede estar vacío";
    } else if (valor.length > 15) {
        mensaje = "El chip no puede tener más de 15 caracteres";
    } else if (isNaN(valor)) {
        mensaje = "El chip solo puede contener números";
    }
    gestionarError("error_chip", mensaje);
}

// Sexo — ENUM('M', 'F')
function validaSexo() {
    const valor = document.getElementById("sexo").value;
    let mensaje = "";

    if (valor === "" || valor === null) {
        mensaje = "Debes seleccionar un sexo";
    } else if (valor !== "M" && valor !== "F") {
        mensaje = "El sexo debe ser M o F";
    }
    gestionarError("error_sexo", mensaje);
}

// Edad — VARCHAR(15)
function validaEdad() {
    const valor = document.getElementById("edad").value.trim();
    let mensaje = "";

    if (valor.length === 0) {
        mensaje = "La edad no puede estar vacía";
    } else if (valor.length > 15) {
        mensaje = "La edad no puede tener más de 15 caracteres";
    } else if (isNaN(valor) || Number(valor) < 0) {
        mensaje = "La edad debe ser un número positivo";
    }
    gestionarError("error_edad", mensaje);
}

// Fecha — DATE (formato YYYY-MM-DD)
function validaFecha() {
    const valor = document.getElementById("fecha").value;
    let mensaje = "";
    const regexFecha = /^\d{4}-\d{2}-\d{2}$/;

    if (valor.length === 0) {
        mensaje = "La fecha no puede estar vacía";
    } else if (!regexFecha.test(valor)) {
        mensaje = "El formato de fecha debe ser YYYY-MM-DD";
    } else {
        const fecha = new Date(valor);
        const hoy = new Date();
        if (isNaN(fecha.getTime())) {
            mensaje = "La fecha no es válida";
        } else if (fecha > hoy) {
            mensaje = "La fecha no puede ser futura";
        }
    }
    gestionarError("error_fecha", mensaje);
}

// Peso — DECIMAL(3,2): valor entre 0.00 y 9.99
function validaPeso() {
    const valor = document.getElementById("peso").value.trim();
    let mensaje = "";
    const num = parseFloat(valor);

    if (valor.length === 0) {
        mensaje = "El peso no puede estar vacío";
    } else if (isNaN(num)) {
        mensaje = "El peso debe ser un número";
    } else if (num < 0) {
        mensaje = "El peso no puede ser negativo";
    } else if (num > 9.99) {
        mensaje = "El peso no puede superar 9.99 kg (formato DECIMAL 3,2)";
    }
    gestionarError("error_peso", mensaje);
}

// Tamaño — ENUM('Pequeño', 'Mediano', 'Grande', 'Gigante')
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

// Comportamiento — VARCHAR(100)
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

// Tipo — ENUM('Gato', 'Perro', 'Conejo')
function validaTipo() {
    const valor = document.getElementById("tipo").value;
    const opcionesValidas = ["Gato", "Perro", "Conejo"];
    let mensaje = "";

    if (valor === "" || valor === null) {
        mensaje = "Debes seleccionar un tipo de mascota";
    } else if (!opcionesValidas.includes(valor)) {
        mensaje = "Tipo no válido. Opciones: Gato, Perro, Conejo";
    }
    gestionarError("error_tipo", mensaje);
}