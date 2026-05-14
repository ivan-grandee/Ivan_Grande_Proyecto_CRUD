<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../../../../view/login.html");
    exit;
}

include "../../../../scripts/conexion.php";

if (isset($_GET['id_veterinario']) && is_numeric($_GET['id_veterinario'])) {
    $id = (int)$_GET['id_veterinario'];

    $sql  = "DELETE FROM veterinarios WHERE id_veterinario = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../../../../view/tabla_veterinarios.php?mensaje=eliminado");
        } else {
            header("Location: ../../../../view/tabla_veterinarios.php?error=sql_error");
        }

        mysqli_stmt_close($stmt);
    } else {
        header("Location: ../../../../view/tabla_veterinarios.php?error=prepare_error");
    }
} else {
    header("Location: ../../../../view/tabla_veterinarios.php?error=id_error");
}

mysqli_close($conn);
?>
