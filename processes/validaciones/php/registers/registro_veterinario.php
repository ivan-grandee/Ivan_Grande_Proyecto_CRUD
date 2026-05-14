<?php
include '../../../../scripts/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['dni']) && isset($_POST['telf']) && isset($_POST['apellido']) && isset($_POST['especialidad']) && isset($_POST['salario'])) {

        session_start();

        $nombre      = $_POST['username'];
        $email       = $_POST['email'];
        $dni         = $_POST['dni'];
        $telf        = $_POST['telf'];
        $apellido    = $_POST['apellido'];
        $especialidad = $_POST['especialidad'];
        $salario     = $_POST['salario'];

        if (empty($nombre) || empty($email) || empty($dni) || empty($telf) || empty($apellido) || empty($especialidad) || empty($salario)) {
            echo "<script>
                    alert('Error: Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            exit;
        }

        $sql = "INSERT INTO veterinarios (nombre, apellido, email, Dni, num_telef, Especialidad, sal)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
            mysqli_stmt_bind_param($result, "ssssisd", $nombre, $apellido, $email, $dni, $telf, $especialidad, $salario);

            if (mysqli_stmt_execute($result)) {
                echo "<script>
                        alert('Veterinario registrado exitosamente.');
                        window.location.href = '../../../../view/tabla_veterinarios.php';
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
    header("Location: ../../../../view/form_veterinario.html");
    exit;
}
?>