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
            function somar ($a, $b) {
                return $a + $b;
            }
            $res = somar($num1, $num2);
            echo "O resultado é: $res";
        ?>
    </div>
    <a href="aula14.html">Voltar</a>
</body>
</html>