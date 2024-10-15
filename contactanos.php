<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - AutoSiglo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #ffffff;
        }

        header {
            background-color: #000000;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 1rem;
        }

        .login-btn {
            background-color: #ff6b6b;
            color: #ffffff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            display: flex;
            gap: 2rem;
        }

        .contact-info {
            flex: 1;
        }

        .map {
            flex: 1;
        }

        h1 {
            color: #ff6b6b;
        }

        .contact-item {
            margin-bottom: 1rem;
        }

        .contact-item h2 {
            color: #ff6b6b;
            margin-bottom: 0.5rem;
        }

        .contact-item p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">AutoSiglo</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="presentacionEmpleados.php">Agentes</a>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <main>
        <div class="contact-info">
            <h1>Contáctanos</h1>
            <div class="contact-item">
                <h2>Dirección</h2>
                <p>Av. Revolución 1234</p>
                <p>Col. Moderna, 12345</p>
                <p>Ciudad de La Paz, Bolivia</p>
            </div>
            <div class="contact-item">
                <h2>Teléfono</h2>
                <p>+52 (55) 1234 5678</p>
            </div>
            <div class="contact-item">
                <h2>Email</h2>
                <p>info@autosiglo.com</p>
            </div>
            <div class="contact-item">
                <h2>Horario de Atención</h2>
                <p>Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                <p>Sábados: 10:00 AM - 2:00 PM</p>
                <p>Domingos: Cerrado</p>
            </div>
        </div>
        <div class="map">
            <!-- Aquí puedes insertar un mapa de Google Maps o una imagen de un mapa -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6962.278683963574!2d-68.11553441433121!3d-16.47064551271849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f210f6de24a71%3A0x607ebc6d88a0162c!2sIMPORTADORA%20AUTOSIGLO%20S.R.L.!5e0!3m2!1ses!2sbo!4v1728395396943!5m2!1ses!2sbo"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
</body>

</html>