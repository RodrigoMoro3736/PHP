<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso em Video</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($n1 + $n2) / 2;
        echo "A média entre $n1 e $n2 é igual a $media";
        if ($media < 5) {
            $sit = "REPROVADO";
        } elseif ($media < 7) {
            $sit = "RECUPERAÇÃO";
        } else {
            $sit = "APROVADO";
        }
        echo "<br/>Situação do aluno: $sit";
        ?>
</body>
</html>