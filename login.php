<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Autosiglo</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <a href="index.php" class="icon-link">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <h1>Login</h1>
            <p>Bienvenido de nuevo</p>
            <form action="verficacion.php" method="POST">
                <input type="email" class="box" name="email" placeholder="Email" required>
                <input type="password" class="box" name="password" placeholder="Contraseña" required>
                <input type="submit" class="boton" name="verif" value="Acceso">
            </form>
        </div>
        <img src="./images/auto.png" alt="Auto" class="auto_derecha">
        <img src="./images/auto4.png" alt="Auto2" class="auto_izquierda">
    </div>
</body>

</html>