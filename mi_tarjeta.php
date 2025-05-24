<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tarjeta Personal Interactiva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column; /* Para centrar verticalmente si hay mucho contenido */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 450px; /* Un poco más ancho para el formulario */
            max-width: 90%;
            text-align: center;
            margin-bottom: 20px; /* Espacio si hay dos secciones */
        }
        h1 {
            color: #333;
            margin-bottom: 25px;
        }
        form div {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 22px); /* Ancho total menos padding y borde */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }

        /* Estilos para la tarjeta mostrada */
        .tarjeta-resultado {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 25px;
            margin-top: 30px;
            text-align: left;
            width: 400px;
            max-width: 90%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        .tarjeta-resultado p {
            font-size: 1.1em;
            color: #444;
            margin-bottom: 8px;
        }
        .tarjeta-resultado strong {
            color: #000;
        }
        .edad-mensaje {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }
        .mayor {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .menor {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .back-button {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crea tu Tarjeta Personal</h1>
        <form action="" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>">
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="0" required value="<?php echo isset($_POST['edad']) ? htmlspecialchars($_POST['edad']) : ''; ?>">
            </div>
            <div>
                <label for="carrera">Carrera:</label>
                <input type="text" id="carrera" name="carrera" required value="<?php echo isset($_POST['carrera']) ? htmlspecialchars($_POST['carrera']) : ''; ?>">
            </div>
            <div>
                <label for="universidad">Universidad:</label>
                <input type="text" id="universidad" name="universidad" required value="<?php echo isset($_POST['universidad']) ? htmlspecialchars($_POST['universidad']) : ''; ?>">
            </div>
            <button type="submit">Generar Tarjeta</button>
        </form>
    </div>

    <?php
    // Solo procesamos y mostramos la tarjeta si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos del formulario de manera segura
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');
        $apellido = htmlspecialchars($_POST['apellido'] ?? '');
        $edad = (int)($_POST['edad'] ?? 0); // Convertir a entero
        $carrera = htmlspecialchars($_POST['carrera'] ?? '');
        $universidad = htmlspecialchars($_POST['universidad'] ?? '');
    ?>
    <div class="container tarjeta-resultado">
        <h2>Tu Tarjeta Generada</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
        <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
        <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>

        <?php
        if ($edad >= 18) {
            echo '<p class="edad-mensaje mayor">Eres mayor de edad.</p>';
        } else {
            echo '<p class="edad-mensaje menor">Eres menor de edad.</p>';
        }
        ?>
    </div>
    <?php
    } // Fin del if que comprueba si el formulario fue enviado
    ?>
    <a href="index.php" class="back-button">Volver al Menú</a>
</body>
</html>