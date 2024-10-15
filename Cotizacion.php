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
    <form class="cotizar-form" method="post" action="CotizacionR.php">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" placeholder="Toyota" required>
        <label for="traccion">Traccion:</label>
        <input type="text" id="traccion" name="traccion" placeholder="Manual 6 velocidades" required>
        <label for="carga">Capacidad de carga:</label>
        <input type="text" id="carga" name="carga" placeholder="3" required>
        <label for="kilometraje">Kilometraje:</label>
        <input type="text" id="kilometraje" name="kilometraje" placeholder="0 kilometros" required>
        <label for="condicion">Condicion:</label>
        <input type="text" id="condicion" name="condicion" placeholder="Medio" required>
        <button type="submit">Siguiente</button>
    </form>
</body>
