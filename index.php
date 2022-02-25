<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade POO Web II</title>
</head>
<body>
    <h2>Criando tabela dinâmica utilizando classes PHP</h2>
    <?php
        include 'autoload.php';

        $colunas = array ( 
            new Coluna("marca"), 
            new Coluna("modelo")
        );
        $carros = array (
            new Carro("VW", "passat CC"),
            new Carro("VW", "Jetão brabo"),
            new Carro("chevrolet", "Omega"),
            new Carro("chevrolet", "opala 6zão"),
            new Carro("fiat", "tempra turbasso"),
            new Carro("ford", "f1000"),
            new Carro("ford", "f250 fumaça preta matadora de urso polar"),
            new Carro("bmw", "m5 v10"),
            new Carro("nissan", "gtr bengador de 911"),
            new Carro("ferari", "355 f1 de rua")
        );

        $tabela = new Tabela($carros, $colunas);
        echo $tabela;
    ?>
</body>
</html>
