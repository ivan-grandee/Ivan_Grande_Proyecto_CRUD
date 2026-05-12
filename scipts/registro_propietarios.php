<?php
include '../scripts/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['confirmar_password'])){
        session_start();

        $usuario = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['confirmar_password'];

         // Validación de campos vacíos
        if (empty($usuario) || empty($email)|| empty($password) || empty($password2)) {
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
        $sql = "INSERT INTO usuario (nombre, email, contraseña) VALUES (?, ?, ?)";
        $result = mysqli_prepare($conn, $sql);

        if ($result) {
        // "sss" indica que los 3 parámetros son strings
        // Orden: usuario ($usuario), password ($pass_hash), nombre_completo ($nombre)
        mysqli_stmt_bind_param($result, "sss", $usuario, $email, $pass_hash,);

        //Ejecutar la intersección
        if(mysqli_stmt_execute($result)){
            echo "<script>
                    alert('Registro exitoso. Ya puede iniciar sesión.');
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