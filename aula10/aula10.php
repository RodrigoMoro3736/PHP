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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n * 2;
            break;
            case 2:
                $r = pow($n,3);
            break;
            case 3:
                $r = sqrt($n);
            break;
        }
        echo "O resultado da operação foi $r";
    ?>
    <br/><a href="aula10.html">Voltar</a>
</body>
</html>