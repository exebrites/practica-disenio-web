<?php
//LISTO PARA ENTREGAR
$numero =  $_POST["numero"];
function descomposicion($numero)
{
    $expresion = "";
    $div10 = 0;
    if ($numero >= 100) {
        $centena = intval($numero / 100);
        $expresion = $centena . " centenas ";
        $modulo10 = $numero % 10;
        if (intval($numero / 10) >= 10) {
            $div10 = intval(intval($numero % 100) / 10);
            $expresion =     $centena++ . " centenas "
                . $div10 . " decenas " . $modulo10 . " unidades";
        } else {
            $expresion = $expresion . $div10 . " decenas " . $modulo10 . " unidades";
        }
    } else {
        $modulo10 = $numero % 10;
        $div10 = ($numero / 10) < 10 ? intval($numero / 10) : 0;
        $expresion = $expresion . "0 centenenas " . $div10 . " decenas " . $modulo10 . " unidades";
    }

    return $expresion;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <!-- Escribir un programa en php que permita ingresar un número y
que permita la descomposición del número en unidad, decena,
centena, etc. -->
    <a href="index.php">Pagina principal</a>
    <header class="centrado">
        <h1>Ejercicio4 : Descomposicion de numeros</h1>
        <p>Ingrese un numero y vea el resultado en unidad,decena y centena</p>
    </header>
    <br>
    <main>
        <section>
            <form action="ejercicio4.php" method="post" class="centrado">
                <label for="">Ingrese un numero</label>
                <input type="number" name="numero" autofocus pattern="\[0-9]" min="0" required>
                <button type="submit">Calcular</button>
            </form>
            <br>
            <div class="centrado">
                <p class="p-letras">Valor ingresado: <strong><?= $numero ?></strong></p>
                <p class="p-letras">Descomposicion: <strong><?= strtoupper(descomposicion($numero)) ?></strong></p>
            </div>
        </section>
    </main>
</body>

</html>