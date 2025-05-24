<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .menu-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .menu-container h1 {
            color: #333;
            margin-bottom: 25px;
        }
        .menu-container ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .menu-container li {
            margin-bottom: 15px;
        }
        .menu-container a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 200px; /* Ancho fijo para los botones */
        }
        .menu-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h1>Bienvenido a mi Proyecto PHP</h1>
        <ul>
            <li><a href="mi_tarjeta.php">Mi Tarjeta</a></li>
            <li><a href="calculadora.php">Calculadora PHP</a></li>
            <li><a href="adivina.php">Adivina mi Número</a></li>
            <li><a href="acerca_de.php">Acerca de mí</a></li>
        </ul>
    </div>
</body>
</html>