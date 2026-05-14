<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: ../../../../view/login.html");
    exit;
}

include "../../../../scripts/conexion.php";

if (isset($_GET['id_mascota']) && is_numeric($_GET['id_mascota'])) {
    $id = (int)$_GET['id_mascota'];

    $sql = "DELETE FROM Mascotas WHERE id_mascota = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../../../../view/tabla_mascotas.php?mensaje=eliminado");
        } else {
            header("Location: ../../../../view/tabla_mascotas.php?error=sql_error");
        }

        mysqli_stmt_close($stmt);
    } else {
        header("Location: ../../../../view/tabla_mascotas.php?error=prepare_error");
    }
} else {
    header("Location: ../../../../view/tabla_mascotas.php?error=id_error");
}

mysqli_close($conn);
?>
