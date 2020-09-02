<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso em Video</title>
</head>
<body>
    <div>
        <?php
            $num1 = isset($_GET["num1"])?$_GET["num1"]:1;
            $num2 = isset($_GET["num2"])?$_GET["num2"]:1;
            $num3 = isset($_GET["num3"])?$_GET["num3"]:1;
            $num4 = isset($_GET["num4"])?$_GET["num4"]:1;
            $num5 = isset($_GET["num5"])?$_GET["num5"]:1;

            function somar () {
                $numeros = func_get_args();
                $total = func_num_args();
                $soma = 0;
                for ($x = 0; $x < $total; $x++) {
                    $soma += $numeros[$x];
                }
                return $soma;
            }

            $resultado = somar($num1, $num2, $num3, $num4, $num5);
            echo "<h3>O resultado da soma é: $resultado</h3>";
        ?>
    </div>
    <a href="aula14b.html">Voltar</a>
</body>
</html>