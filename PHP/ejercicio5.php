<?php
//LISTO PARA ENTREGAR
$numero=0;
$numero = $_POST['numero'];
function conversion_decimal($numero)
{

    $caracteres =  str_split($numero);
    $decimal = 0;
    $j = 0;
    for ($i = 4; $i >= 0; $i--) {
        if ($caracteres[$i - 1] != 0) {
            $decimal = $decimal + pow(2, $j);
        }
        $j++;
    }

    return $decimal;
}
function converion_hexadecimal($decimal)
{

    switch ($decimal) {
        case 10:
            $hexadecimal = 'A';
            break;
        case 11:
            $hexadecimal = 'B';
            break;
        case 12:
            $hexadecimal = 'C';
            break;
        case 13:
            $hexadecimal = 'D';
            break;
        case 14:
            $hexadecimal = 'E';
            break;
        case 15:
            $hexadecimal = 'F';
            break;



        default:
            $hexadecimal = $decimal;
            break;
    }
    return $hexadecimal;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <a href="index.php">Pagina principal</a>
    <!-- Escriba un programa que permita el ingreso de un numero binario
e imprima su equivalente en decimal y hexadecimal -->

    <!-- numeros  hexadec   binario 
0           0        0000
1           1        0001
2           2        0010
3           3        0011
4           4        0100
5           5        0101
6           6        0110
7           7        0111
8           8        1000
9           9        1001
10          A        1010 -->

    <header class="centrado">
        <h1>Ejercicio5 : Conversion binario a decimal y hexadecimal</h1>
        <p>Ingrese un numero y mostrar el resultado en decimal y hexadecimal</p>
    </header>
    <br>
    <main>
        <section>
            <form action="ejercicio5.php" method="post" class="centrado">
                <label for="">ingrese un valor</label>
                <input type="text" name="numero" autofocus placeholder="Ingrese un valor en binario" pattern="[01]+">
                
                
                <button type="submit">Convertir</button>
                <p style="font-size: smaller;"><strong>Nota:</strong>acepta valores entre 0000 y 1111</p>
            </form>


            <div class="centrado">
                <p class="p-letras">Valor ingresador: <strong>
                        <?php
                        switch (strlen($numero)) {
                            case 1:
                                echo $numero . "000";
                                break;
                            case 2:
                                echo $numero . "00";
                                break;
                            case 3:
                                echo $numero . "0";
                                break;
                            default: 
                                echo $numero;
                            break;
                        }

                        ?></strong><br>
                    Expresion decimal: <strong><?= conversion_decimal($numero) ?></strong><br>
                    Expresion hexadecimal: <strong><?= converion_hexadecimal(conversion_decimal($numero)) ?></strong></p>

            </div>
        </section>
    </main>
</body>

</html>