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
            # $n = array(3, 5, 8, 2);
            # n[] = 7; - isso vai criar uma posição no final do $n e adicionar o valor 7
            # ou array_push($n, 7);

            # para incluir um indice no começo do array:
            # array_unshift($n, 7);

            # $c = range(5, 20, 2);
            # cria um array em $c com 8 posições. Começando em 5, pulando de 2 em 2, até 20
            # 5 = inicio // 20 = final // 2 = passo

            # foreach($c as $valor) {
            #     echo "$valor ";
            # }
            # imprimir array

            # array com indices personalizados:
            # $v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
            # cria um array com os indices 1 3 6 e 8

            # deletar um indice:
            # unset($v[8]);
            # deleta o indice 8 junto com o seu valor "D"
            # para deletar o ultimo indice:
            # array_pop($v);
            # para deletar o primeiro indice:
            # array_shift($v);


            # array com indices personalizados com nomes:
            # $cad = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
            # indices com nomes e cada indice tem um valor diferente (string, inteiro e float)
            # $cad["fuma"] = true; # adiciona o indice no final do array

            # usar foreach com array personaliado:
            # foreach($cad as $campo=>$valor) {
            #     echo "O valor de $campo é $valor<br/>";
            # }
            
            # matriz:
            # $n = array(array(2, 3)
            #            array(3, 4)
            #            array(9, 5));

            # para alterar um valor dentro da matriz:
            # $n[2][0] = $n[1][1];
            # 9 passa a valer 4

            # colocar array em ordem:
            # sort($n);
            # ordem reversa:
            # rsort($n);
            # colocar na ordem incluindo os indices:
            # asort($n);
            # reverso incluindo os indices:
            # arsort($n);
            # ordenar pelo indice (key):
            # ksort($n);
            # reverso pelo indice:
            # krsort($n);

            # 
        ?>
    </div>
</body>
</html>