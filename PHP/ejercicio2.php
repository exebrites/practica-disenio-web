<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4a90e2;
            color: #fff;
        }
    </style>
</head>

<body>
    <a href="index.php">Pagina principal</a>
    <header class="centrado">
        <h1>Ejercicio2 : Calcular números primos</h1>
        <p>Ingrese un número y calcular los siguientes 16 números primos</p>
    </header>
    <main>
        <section>
            <div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="numero">Ingrese un número:</label>
                    <input type="number" id="numero" name="numero" required min="1" pattern="[0-9]">
                    <button type="submit">Calcular</button>
                </form>

                <?php
                // Función para verificar si un número es primo
                function esPrimo($num)
                {
                    if ($num <= 1) {
                        return false;
                    }
                    for ($i = 2; $i * $i <= $num; $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                // Procesar el formulario cuando se envíe
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obtener el número ingresado por el usuario
                    $numero = $_POST["numero"];

                    // Mostrar la tabla de 4x4 con los 16 siguientes números primos
                    echo "<h3>Números primos siguientes al número $numero:</h3>";
                    echo "<table>";
                    echo "<thead><tr></tr></thead>";
                    echo "<tbody>";

                    $contador = 0;
                    $siguienteNumero = $numero + 1;

                    while ($contador < 16) {
                        if (esPrimo($siguienteNumero)) {
                            if ($contador % 4 == 0) {
                                echo "<tr>";
                            }
                            echo "<td>$siguienteNumero</td>";
                            $contador++;
                            if ($contador % 4 == 0) {
                                echo "</tr>";
                            }
                        }
                        $siguienteNumero++;
                    }

                    echo "</tbody>";
                    echo "</table>";
                }
                ?>

            </div>
        </section>
    </main>

</body>

</html>