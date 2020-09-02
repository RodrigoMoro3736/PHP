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
            $num = isset($_GET["num"])?$_GET["num"]:1;
            $resultado = 0;
            $mult = "";
            for ($cont = 1;$cont <= $num;$cont++) {
                if ($num % $cont == 0) {
                    $resultado += 1;
                    $mult .= "$cont, ";
                }
            }
            echo "<h2>Analisando o número $num ...</h2>";
            echo "<br/>Valores Multiplos: $mult<br/>";
            echo "Total de múltiplos: $resultado<br/>";
            if ($resultado <= 2) {
                echo "RESULTADO: $num é um número primo!";
            } else {
                echo "RESULTADO: $num não é um número primo!";
            }
        ?>
    </div>
    <br/>
    <a href="aula13c.html">Voltar</a>
</body>
</html>