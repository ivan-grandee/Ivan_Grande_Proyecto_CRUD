<?php
include './conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])){
        session_start();
        $usuario = $_POST['username'];
        $pass = $_POST['password']; // la contra que escribio el user



        $caracteres = str_split($usuario);
        $tieneArroba = false;

        // Recorremos cada carácter para buscar la arroba
        foreach ($caracteres as $char) {
            if ($char === '@') {
                $tieneArroba = true;
                break; // Si la encontramos, no hace falta seguir revisando
            }
        }

        // Decidimos la consulta según lo que encontramos
        if ($tieneArroba) {
            $sql = "SELECT * FROM usuario WHERE email = '$usuario'";
            $tipo_user = "email";
        } else {
            $sql = "SELECT * FROM usuario WHERE nombre = '$usuario'";
            $tipo_user = "user";
        }

        //buscamos al usuario por su nombre (no por la contra)
        $resultado = mysqli_query($conn,$sql);


        if (mysqli_num_rows($resultado) > 0){
            $fila =mysqli_fetch_assoc($resultado);
            $hash_db = $fila['contraseña']; /// hash guardado en la db

            //Verificamos si la contraseña coincide con el hash
            if(password_verify($pass, $hash_db,)) {

                //Creamos la session
                $_SESSION['username'] = $fila['username'];
                $_SESSION['id_usuario'] = $fila['id_usuario'];

                header("Location: ../processes/bienvenida.php");
                exit();

            }else{//error contraseña incorrecta
    
                echo"<script> alert('contraseña incorrecta'); window.location='../view/login.html';</script>";
            }
        }else if ($tipo_user == "user") {// error usuario no existe
            echo "<script> alert('El usuario no existe'); window.location='../view/login.html';</script>";
            }else {
            echo "<script> alert('El correo no existe'); window.location='../view/login.html';</script>";
            }
        }
    }
?>