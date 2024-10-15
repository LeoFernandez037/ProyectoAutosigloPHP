<?php
include("coneccion.php");

if (isset($_POST['verif'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        die("No se encuentra");
    } else {
        $user = mysqli_fetch_array($resultado);
        if ($user['contra'] == $password) {
            if ($user['rol'] == 1) {
                header("Location: index.php");
            }
            if ($user['rol'] == 2) {
                header("Location: empleado.php");
            }
            if ($user['rol'] == 3) {
                header("Location: administrador.html");
            }
        }
    }
}

?>