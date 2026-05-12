<?php
include '../scripts/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['email'])  && isset($_POST['dni']) && isset($_POST['telf'])){
        session_start();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];

         // Validación de campos vacíos
        if (empty($nombre) || empty($apellido) || empty($email)|| empty($dni) || empty($telefono)) {
            echo "<script>
                    alert('Error: Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            exit;
        }

       

        // 7. Preparar la consulta SQL (Estilo Procedural)
        $sql = "INSERT INTO propietario (nombre, nom_telf, email, Dni, apellido) VALUES (?, ?, ?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
        // "sss" indica que los 3 parámetros son strings
        // Orden: usuario ($usuario), password ($pass_hash), nombre_completo ($nombre)
        mysqli_stmt_bind_param($result, "sisss", $nombre, $telefono, $email, $dni, $apellido);

        //Ejecutar la intersección
        if(mysqli_stmt_execute($result)){
            echo "<script>
                    alert('Registro el propietario de XXXX se ha registrado exitosamente.');
                    window.location.href = '../view/login.html';
                </script>";

        }else{
            echo "Error al registrar" . mysqli_error($conn);
        }
        
    }else{
        echo "Error en la preparación de la consulta: " . mysqli_error($conn);

    }
}else{
    echo "Faltan datos en el formulario." ;
}
// Cerramos la conexión al final
    mysqli_close($conn);

} else {
    // Si intentan entrar al script sin enviar al formulario, redirigimos al registro
    header("Location: ../processes/register.php");
    exit;
}
?>