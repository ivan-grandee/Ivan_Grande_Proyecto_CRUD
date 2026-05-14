<?php
include '../../../../scripts/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['dni']) && isset($_POST['telf'])) {

        session_start();

        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email    = $_POST['email'];
        $dni      = $_POST['dni'];
        $telefono = $_POST['telf'];

        // Validación de campos vacíos
        if (empty($nombre) || empty($apellido) || empty($email) || empty($dni) || empty($telefono)) {
            echo "<script>
                    alert('Error: Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            exit;
        }

        $sql = "INSERT INTO Propietario (nombre, apellido, email, Dni, num_telef) VALUES (?, ?, ?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
            mysqli_stmt_bind_param($result, "ssssi", $nombre, $apellido, $email, $dni, $telefono);

            if (mysqli_stmt_execute($result)) {
                echo "<script>
                        alert('Propietario registrado exitosamente.');
                        window.location.href = '../../../../view/tabla_propietarios.php';
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
    header("Location: ../../../../view/form_propietario.html");
    exit;
}
?>