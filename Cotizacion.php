<?php include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotiza en Línea</title>
    <link rel="stylesheet" href="./Css/Cotizacion.css"> 
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="progress-bar">
        <div class="progress-bar-fill" style="width: 50%;"></div>
    </div>
    <form class="cotizar-form" method="post" action="procesar_cotizacion.php"> <!-- Cambia el action a donde quieras enviar el formulario -->
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>

        <label for="anio">Año:</label>
        <input type="text" id="anio" name="anio" required>

        <label for="kilometraje">Kilometraje:</label>
        <input type="text" id="kilometraje" name="kilometraje" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        
        <button type="submit" onclick="window.location.href='CotizarRegis.php'">Siguiente</button>

    </form>
</body>