<?php
include("../../../../scripts/conexion.php");
$usuario = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

/* VALIDACIONES SERVIDOR */

if(strlen($usuario) == 0 || strlen($usuario) > 30){
    die("Usuario inválido");
}else if(strlen($password) == 0 || strlen($password) > 255){
    die("Usuario inválido");
}else if(strlen($email) == 0 || strlen($email) > 50){
    die("Usuario inválido");
}

if(!preg_match('/[A-Z]/', $password )){
    die("La contraseña debe tener al menos una mayúscula");
}
if(strlen($email) == 0 ){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La dirección de email '$email' es válida.\n";
}
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "La dirección de email '$email' es válida.\n";
} else {
    echo "La dirección de email no '$email' es válida.\n";
}
}


/* COMPROBAR SI EXISTE */

$sql = "SELECT * FROM usuario WHERE nombre='$usuario'";
$resultado = mysqli_query($conn,$sql);

if(mysqli_num_rows($resultado) > 0){
    die("El usuario ya existe");
}

/* HASH PASSWORD */

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

/* INSERTAR */

$sqlInsert = "INSERT INTO usuario (nombre, contraseña, email) VALUES (?, ?, ?)";
$resultado_2 = mysqli_prepare($conn,$sqlInsert);
        if ($resultado_2) {
            // "sss" indica que los 3 parámetros son strings.
            // Orden: usuario ($user), password ($pass_hash), nombre_completo ($nombre)
                mysqli_stmt_bind_param($resultado_2, "sss", $usuario, $passwordHash, $email);

            // Ejecutar la inserción
            if (mysqli_stmt_execute($resultado_2)) {
                echo "<script>
                        alert('¡Registro exitoso! Ya puedes iniciar sesión.');
                        window.location.href = '../../../../view/login.html';
                    </script>";
            } else {
                echo "<script>
                        alert('¡Registro fallido!.');
                        window.location.href = '../../../../view/register.php';
                    </script>";
            }
            mysqli_stmt_close($resultado_2);
        }else{
            echo "Error en la preparacion de la consulta " . mysqli_error($conn);
        }
?>