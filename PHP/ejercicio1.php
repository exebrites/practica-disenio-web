<?php
// LISTO PARA ENTREGAR

$numero = 1;
if (isset($_POST['numero'])) {
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4a90e2;
            color: #ffffff;
            font-size: 1.2em;
        }

        tr:nth-child(even) {
            background-color: #e6f7ff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Escriba una aplicación en php que permita el ingreso de un
número entero entre 1 y 9 e imprima la tabla de multiplicar de dicho
número. El resultado debe mostrarse usando la etiqueta Table de
html -->
    <a href="index.php">Pagina principal</a>
    <header class="centrado">
        <h1>Ejercicio1 : Tabla de multiplicacion</h1>
        <p>Ingrese un numero y calcule su tabla de multiplicacion</p>
    </header>
    <br>
    <main>
        <section>
            <form action="ejercicio1.php" method="post" class="centrado">
                <label for="">Ingrese un valor</label>

                <input required type="number" name="numero" id="" autofocus pattern="\[0-9]" min="1" max="9" placeholder="Ingrese un valor entre 1 y 9">

                <button type="submit">Calcular</button>
            </form>
            <br>

            <table>
                <thead>
                    <tr>
                        <th>Tabla del <?= $numero ?></th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    for ($i = 0; $i < 11; $i++) {
                        $resultado = $numero * $i;
                        echo "<tr>
                         <td>$numero X $i</td>
                         <td>$resultado</td>
                         </tr>";
                    }
                    ?>
                </tbody>
            </table>

        </section>
    </main>
</body>

</html>