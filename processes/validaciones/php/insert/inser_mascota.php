<?php
include '../../../../scripts/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['nombre']) && isset($_POST['chip']) && isset($_POST['tipo']) && isset($_POST['sexo']) && isset($_POST['raza']) && isset($_POST['peso']) && isset($_POST['tamaño']) && isset($_POST['comportamiento']) && isset($_POST['fecha']) && isset($_POST['veterinario']) && isset($_POST['propietario'])) {



        $nombre         = $_POST['nombre'];
        $chip           = $_POST['chip'];
        $tipo           = $_POST['tipo'];
        $sexo           = $_POST['sexo'];
        $raza           = $_POST['raza'];         
        $peso           = $_POST['peso'];
        $tamaño         = $_POST['tamaño'];
        $comportamiento = $_POST['comportamiento'];
        $fecha          = $_POST['fecha'];
        $veterinario    = $_POST['veterinario'];  
        $propietario    = $_POST['propietario'];  

        if (empty($nombre) || empty($chip) || empty($tipo) || empty($sexo) || empty($raza) || empty($peso) || empty($tamaño) || empty($comportamiento) || empty($fecha) || empty($veterinario) || empty($propietario)) {
            echo "<script>alert('Todos los campos son obligatorios');
            window.history.back();</script>";
            exit; 
        }

        $sql = "INSERT INTO Mascotas (Chip, Nombre, Sexo, Fecha, id_Raza, id_Propietario, id_veterinario, peso, Tamaño, Comportaminto, tipo)VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $resultado = mysqli_prepare($conn, $sql);

        if ($resultado) {
           
            mysqli_stmt_bind_param($resultado, "ssssiidss​s", $chip, $nombre, $sexo, $fecha, $raza, $propietario, $veterinario, $peso, $tamaño, $comportamiento, $tipo);

            if (mysqli_stmt_execute($resultado)) {
                echo "<script>alert('Registro exitoso!'); window.location.href='../../../../view/tabla_mascotas.php'</script>";
            } else {
                echo "Error al registrar: " . mysqli_stmt_error($resultado); 
            }

            mysqli_stmt_close($resultado);
        } else {
            echo "Error al preparar la consulta: " . mysqli_error($conn);
        }

    } else {
        echo "Faltan datos en el formulario";
    }

} else {
    header("Location: ../../../../view/registro_mascotas.html");
    exit;
}
?>