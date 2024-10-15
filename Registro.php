<?php
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Autosiglo</title>
    <link rel="stylesheet" href="./Css/Registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <a href="index.php" class="icon-link">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <h1>Registro</h1>
            <p>Bienvenido al registro de AutoSiglo</p>
            <p>Porfavor llene los siguientes campos</p>
            <form action="registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Primer Nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Primer Apellido" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="correo@example.com" required>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="123-456-7890" required>
            <label for="telefono">Contraseña:</label>
            <input type="password" id="password" name="Contraseña" placeholder="1TE4567890" required>
            <input type="password2" name="password2" placeholder="Contraseña de nuevo" required>
                <button type="submit">Acceso</button>  
            </form>
        </div>
        <img src="./Imagenes/auto.png" alt="Auto" class="auto_derecha">
        <img src="./Imagenes/auto4.png" alt="Auto2" class="auto_izquierda">
    </div>
</body>
</html>
<?php
?>