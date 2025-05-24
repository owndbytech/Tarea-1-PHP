<?php
session_start(); // Inicia la sesión para guardar el número aleatorio

// Generar un número aleatorio si no existe en la sesión
if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 5);
}

$mensaje = "";
$clase_mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_usuario = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
    $numero_secreto = $_SESSION['numero_secreto'];

    if ($numero_usuario == $numero_secreto) {
        $mensaje = "¡Wow, adivinaste! El número era {$numero_secreto}.";
        $clase_mensaje = "success";
        // Si acierta, reseteamos el número para una nueva partida
        unset($_SESSION['numero_secreto']);
    } else {
        $mensaje = "¡Sigue intentando! El número correcto era {$numero_secreto}.";
        $clase_mensaje = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina mi Número</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .game-container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 350px;
            text-align: center;
        }
        .game-container h1 {
            color: #333;
            margin-bottom: 25px;
        }
        .game-container p {
            color: #555;
            margin-bottom: 20px;
        }
        .game-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        .game-container input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.1em;
            text-align: center;
        }
        .game-container button {
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .game-container button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 25px;
            padding: 15px;
            border-radius: 5px;
            font-size: 1.2em;
            font-weight: bold;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
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
    <div class="game-container">
        <h1>Adivina mi Número</h1>
        <p>Intenta adivinar un número entre 1 y 5.</p>
        <form action="" method="post">
            <label for="numero">Tu número:</label>
            <input type="number" id="numero" name="numero" min="1" max="5" required>
            <button type="submit">Adivinar</button>
        </form>

        <?php
        if ($mensaje) {
            echo "<p class='message {$clase_mensaje}'>{$mensaje}</p>";
        }
        ?>
        <a href="index.php" class="back-button">Volver al Menú</a>
    </div>
</body>
</html>
