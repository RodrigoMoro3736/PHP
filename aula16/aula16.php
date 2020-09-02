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
            $produto = "pão";
            $preco = 3.99;
            printf ("O %s custa R$%.2f", $produto, $preco);
            # %s para string
            # %.2f para flot mostrando duas casas decimais
            # %d para valor decimal (positivo ou negativo)
            # %u para valor decimal sem sinal (apenas positivo)
            
            # print_r(); imprime o vetor ou array (uso somente para fase de testes)

            # $tamanho = strlen($exemplo); vai jogar o tamanho (len)da string $exemplo dentro do $tamanho

            # trim(); remove os espaços no inicio e no final (strip do python)

            # strtolower(); deixa todas as letras em minusculo

            # strtoupper(); deixa todas as letras em maisculo

            # ucfirst(); deixa a primeira letra maiuscula

            # ucwords(); deixa a primeira letra de cada palavra maiuscula

            # stripos($var, "PHP"); mostra a posição da palavra "PHP" dentro da string $var

            # $frase = "testando a funcao replace";
            # $novaFrase = str_ireplace("testando", "usando", $frase);
            # substitui a palavra "testando" por "usando"

            

        ?>
    </div>
</body>
</html>