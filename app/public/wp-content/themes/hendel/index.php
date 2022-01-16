<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Commit</title>
</head>
<body>
<!--<pre>
    <?php 
    //$produtos = ['Bermudas', 'Camisetas', 'Casacos']; 
    
    //echo "<h2>1-</h2>" . $produtos[1] . PHP_EOL . PHP_EOL;
    //echo "<h2>2-</h2>" . $produtos . PHP_EOL . PHP_EOL;
    //echo "<h2>3-</h2>"; print_r($produtos) . PHP_EOL . PHP_EOL . PHP_EOL; 
    //echo "<h2>4-</h2>"; var_dump($produtos) . PHP_EOL;

    ?>
    </pre>-->
    <pre>
    <?php
    $produto = [
        'nome' => 'Camisa Preta',
        'preco' => 'R$ 49',
        'img' => [
            'src' => './img/image.png',
            'alt' => 'Camisa Preta'
        ],
        'tamanho' => 'M'
    ];
    // adicionando itens a um array
    $produto['estoque'] = '10 itens';
    $categorias = ['Camisetas'];
    $categorias[] = 'Bermudas';
    $categorias[] = 'Casacos';

    var_dump($produto) . PHP_EOL;
    var_dump($categorias) . PHP_EOL;
    ?> 
    </pre>
</body>
</html>