<?php
include '../scripts/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['email'])  && isset($_POST['dni']) && isset($_POST['telf']) && isset($_POST['apellido']) && isset($_POST['especialidad']) && isset($_POST['salario'])){
        session_start();

        $nombre = $_POST['username'];
        $email = $_POST['email'];
        $dni = $_POST['dni'];
        $telf = $_POST['telf'];
        $apellido = $_POST['apellido'];
        $especialidad = $_POST['especialidad'];
        $salario = $_POST['salario'];


         // Validación de campos vacíos
        if (empty($usuario) || empty($email)|| empty($dni) || empty($telf) || empty($apellido) || empty($especialidad) || empty($salario)) {
            echo "<script>
                    alert('Error: Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            exit;
        }

        if($password !== $password2){
            echo "<script>
                    alert('Error: Las contraseñas no coinciden');
                    window.history.back();
                  </script>";
            exit;
        }

        // Encriptar la contraseña (Seguridad)
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);

        // 7. Preparar la consulta SQL (Estilo Procedural)
        $sql = "INSERT INTO veterinarios (nombre, num_telf, email, Dni, Especialidad, sal, apellido) VALUES (?, ?, ?, ?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
        // "sss" indica que los 3 parámetros son strings
        // Orden: usuario ($usuario), password ($pass_hash), nombre_completo ($nombre)
        mysqli_stmt_bind_param($result, "sisssis", $nombre, $telf, $email, $dni, $especialidad, $salario, $apellido);

        //Ejecutar la intersección
        if(mysqli_stmt_execute($result)){
            echo "<script>
                    alert('Se ha registradop exitosamente al veterinario.');
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