<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Confección de Autos</title>
</head>
<body>
    <?php
    try {
        $conexion = new PDO("sqlsrv:server=DESKTOP-VJAS3QG\SQLEXPRESS;database=db_autosiglo_v2");
        // Configurar el modo de error de PDO para excepciones
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h1>Conexión exitosa</h1>";
    } catch (PDOException $e) {
        echo "<h1>Error en la conexión: " . $e->getMessage() . "</h1>";
    }
    ?>
    
    <h1>Bienvenido a nuestra confección de autos</h1>
    <p>Este es el sitio web de nuestra confección de autos.</p>
</body>
</html>
