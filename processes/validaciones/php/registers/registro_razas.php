<?php
include '../../../../scripts/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['nombre']) && isset($_POST['comportamiento']) && isset($_POST['tamaño']) && isset($_POST['peso']) && isset($_POST['caract']) && isset($_POST['esperanza'])) {

        $nombre         = $_POST['nombre'];
        $comportamiento = $_POST['comportamiento'];
        $tamaño         = $_POST['tamaño'];
        $peso           = $_POST['peso'];
        $caract         = $_POST['caract'];
        $esperanza      = $_POST['esperanza'];

        // Validación de campos vacíos
        if (empty($nombre) || empty($comportamiento) || empty($tamaño) || empty($peso) || empty($caract) || empty($esperanza)) {
            echo "<script>
                    alert('Error: Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            exit;
        }

        $sql = "INSERT INTO razas (nombre, Comportamiento_raza, Tamaño_raza, Peso_raza, Caract_generales, esperanza_vida)
                VALUES (?, ?, ?, ?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
            mysqli_stmt_bind_param($result, "ssssss", $nombre, $comportamiento, $tamaño, $peso, $caract, $esperanza);

            if (mysqli_stmt_execute($result)) {
                echo "<script>
                        alert('Raza registrada exitosamente.');
                        window.location.href = '../../../../view/tabla_razas.php';
                      </script>";
            } else {
                echo "Error al registrar: " . mysqli_stmt_error($result);
            }

            mysqli_stmt_close($result);
        } else {
            echo "Error en la preparación de la consulta: " . mysqli_error($conn);
        }

    } else {
        echo "Faltan datos en el formulario.";
    }

    mysqli_close($conn);

} else {
    header("Location: ../../../../view/tabla_razas.php");
    exit;
}
?>