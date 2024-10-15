<?php include 'header.php'; ?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="./Css/CotizarRegis.css"> 
</head>
<body>
    <div class="container">
        <h2>Formulario de Contacto</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> <!-- Utiliza PHP_SELF para enviar el formulario a la misma página -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Primer Nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Primer Apellido" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" placeholder="correo@example.com" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="123-456-7890" required>

            <button type="submit" onclick="window.location.href='Cotizacion.php'">Anterior</button>
            <button type="submit" onclick="window.location.href='CotizarRegis.php'">Enviar</button>
        </form>

        <?php
        // Procesar el formulario cuando se envíe
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $nombre = htmlspecialchars($_POST['nombre']);
        //     $apellido = htmlspecialchars($_POST['apellido']);
        //     $email = htmlspecialchars($_POST['email']);
        //     $telefono = htmlspecialchars($_POST['telefono']);
        //     $mensaje = htmlspecialchars($_POST['mensaje']);


        //     echo "<h3>Gracias por contactarnos, $nombre $apellido.</h3>";
        //     echo "<p>Hemos recibido tu mensaje y te responderemos pronto.</p>";
        // }
        ?> 
    </div>
</body>
</html>
