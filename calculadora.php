<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .calculator-container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 350px;
            text-align: center;
        }
        .calculator-container h1 {
            color: #333;
            margin-bottom: 25px;
        }
        .calculator-container form div {
            margin-bottom: 15px;
            text-align: left;
        }
        .calculator-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .calculator-container input[type="number"],
        .calculator-container select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .calculator-container button {
            background-color: #28a745;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }
        .calculator-container button:hover {
            background-color: #218838;
        }
        .result {
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
    <div class="calculator-container">
        <h1>Calculadora Simple PHP</h1>
        <form action="" method="post">
            <div>
                <label for="num1">Número 1:</label>
                <input type="number" id="num1" name="num1" step="any" required value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
            </div>
            <div>
                <label for="num2">Número 2:</label>
                <input type="number" id="num2" name="num2" step="any" required value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
            </div>
            <div>
                <label for="operacion">Operación:</label>
                <select id="operacion" name="operacion">
                    <option value="sumar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'sumar') ? 'selected' : ''; ?>>Sumar</option>
                    <option value="restar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'restar') ? 'selected' : ''; ?>>Restar</option>
                    <option value="multiplicar" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicar') ? 'selected' : ''; ?>>Multiplicar</option>
                    <option value="dividir" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'dividir') ? 'selected' : ''; ?>>Dividir</option>
                </select>
            </div>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
            $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
            $operacion = $_POST['operacion'];
            $resultado = "";
            $clase_mensaje = "";

            switch ($operacion) {
                case 'sumar':
                    $resultado = $num1 + $num2;
                    $clase_mensaje = "success";
                    break;
                case 'restar':
                    $resultado = $num1 - $num2;
                    $clase_mensaje = "success";
                    break;
                case 'multiplicar':
                    $resultado = $num1 * $num2;
                    $clase_mensaje = "success";
                    break;
                case 'dividir':
                    if ($num2 == 0) {
                        $resultado = "¡Error! No se puede dividir entre cero.";
                        $clase_mensaje = "error";
                    } else {
                        $resultado = $num1 / $num2;
                        $clase_mensaje = "success";
                    }
                    break;
            }
            echo "<p class='result {$clase_mensaje}'>Resultado: {$resultado}</p>";
        }
        ?>
        <a href="index.php" class="back-button">Volver al Menú</a>
    </div>
</body>
</html>