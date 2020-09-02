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
            $tab = isset($_GET["tab"])?$_GET["tab"]:0;
            for ($cont = 0;$cont <= 10;$cont++) {
                echo "$tab x $cont = ", $tab * $cont;
                echo "<br/>";
            }
        ?>
    </div>
    <br/>
    <a href="aula13b.html">Voltar</a>
</body>
</html>