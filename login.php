<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $conexion = new PDO("sqlsrv:server=DESKTOP-VJAS3QG\SQLEXPRESS;database=db_autosiglo_v2");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT ID_USUARIO, NICKNAME, CONTRASEÑA, ID_ROL 
                FROM Usuario 
                WHERE NICKNAME = :email";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['CONTRASEÑA'])) {
            $_SESSION['usuario'] = $usuario['NICKNAME'];
            $_SESSION['rol'] = $usuario['ID_ROL'];
            if ($usuario['ID_ROL'] == 1) {
                header('Location: pagina_administrador.php');
            } elseif ($usuario['ID_ROL'] == 2) {
                header('Location: pagina_usuario.php');
            } else {
                header('Location: pagina_inv.php');
            }
            exit();
        } else {
            echo "<h2>Correo o contraseña incorrectos</h2>";
        }

    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
}
?>
