<?php

//LISTO PARA ENTREGAR
function convertirNumeroALetras($numero)
{
    $unidades = [
        '', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve',
        'diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'
    ];

    $decenas = [
        '', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'
    ];

    if ($numero == 0) {
        return 'cero';
    }

    if ($numero < 20) {
        return $unidades[$numero];
    }

    if ($numero < 100) {
        if ($numero % 10 == 0) {
            return $decenas[intval($numero / 10)];
        } else {
            return $decenas[intval($numero / 10)] . ' y ' . $unidades[$numero % 10];
        }
    }

    if ($numero == 100) {
        return 'cien';
    }

    return 'Número fuera de rango';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Convertir Cifra a Letras</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        .p-letras {
            font-size: x-large;
        }
    </style>
</head>

<body>
    <!-- -Escribir un programa en php que permita el ingreso de una cifra y
como resultado muestra dicha cifra en letras. -->
    <a href="index.php">Pagina principal</a>
    <header class="centrado">
        <h1>Ejercicio3 : Convertir cifras a letras</h1>
        <p>Ingrese un numero y mostrar el resultado en letras</p>
    </header>
    <br>
    <main>
        <section>
            <form method="post" class="centrado">
                <label for="numero">Ingrese una cifra</label>
                <input type="number" id="numero" name="numero" min="1" max="100" required autofocus placeholder="Ingrse una cifra entre 1 y 100:">
                <button type="submit">Convertir a Letras</button>
            </form>
            <div class="centrado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numero = $_POST["numero"];

                    echo "<p class='p-letras'>Valor ingresado: $numero</p>";
                    echo "<p class='p-letras'>La cifra en letras es: <strong>" . strtoupper(convertirNumeroALetras($numero))
                        . "</strong></p>";
                }
                ?>
            </div>
        </section>
    </main>

</body>

</html>