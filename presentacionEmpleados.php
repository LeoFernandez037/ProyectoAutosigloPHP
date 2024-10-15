<?php
$workers = [
    ['name' => 'Carlos Rodríguez', 'specialty' => 'Mecánico Automotriz', 'photo' => 'https://www.stelorder.com/wp-content/uploads/2021/09/portada-empresario-individual.jpg'],
    ['name' => 'Ana Martínez', 'specialty' => 'Ingeniera Eléctrica', 'photo' => 'https://www.idearius.com/es/wp-content/uploads/foto-ambiente-lab-01.jpg'],
    ['name' => 'Luis Hernández', 'specialty' => 'Especialista en Pintura', 'photo' => 'https://derechovirtual.org/wp-content/uploads/2023/07/empresario-individual.jpg'],
    ['name' => 'María González', 'specialty' => 'Asesora de Ventas', 'photo' => 'https://factorial.mx/wp-content/uploads/2022/05/17151340/crecimiento-prof.jpg'],
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/presenta.css">
    <title>Nuestro Equipo - AutoSiglo</title>
</head>

<body>
    <header>
        <div class="logo">AutoSiglo</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="contactanos.php">Contáctanos</a>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <main>
        <h1>Nuestro Equipo</h1>
        <div class="worker-grid">
            <?php foreach ($workers as $worker): ?>
                <div class="worker-card">
                    <img src="<?php echo $worker['photo']; ?>" alt="<?php echo $worker['name']; ?>" class="worker-photo">
                    <div class="worker-info">
                        <div class="worker-name"><?php echo $worker['name']; ?></div>
                        <div class="worker-specialty"><?php echo $worker['specialty']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>AutoSiglo &copy; <?php echo date("Y"); ?> Todos los derechos reservados.</p>
    </footer>
</body>

</html>