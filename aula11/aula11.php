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
        $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $final = isset($_GET["final"])?$_GET["final"]:0;
        $inc = isset($_GET["inc"])?$_GET["inc"]:1;
        while (TRUE) {
            if ($inicio < $final) {
                while ($inicio <= $final) {
                    echo "$inicio - ";
                    $inicio = $inicio + $inc;
                } }
            if ($final < $inicio) {
                while ($inicio >= $final){
                    echo "$inicio - ";
                    $inicio = $inicio - $inc;
                } }
            break;
        }
    ?>
    <br/><a href="aula11.html">Voltar</a>
</body>
</html>