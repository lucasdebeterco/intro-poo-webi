<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade POO Web II</title>
    <style> 
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Criando tabela dinâmica utilizando classes PHP</h2>
    <?php
        include 'autoload.php';

        if (isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        } else {
            $pagina = 1;
        }

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
            new Carro("ford", "f250 matadora de urso polar"),
            new Carro("bmw", "m5 v10"),
            new Carro("bmw", "m3 e92"),
            new Carro("nissan", "gtr bengador de 911"),
            new Carro("nissan", "r34 midnight purple"),
            new Carro("ferari", "355 f1 de rua"),
            new Carro("ferari", "f40 lm"),
            new Carro("audi", "rs6"),
            new Carro("audi", "s8"),
            new Carro("hyundai", "azera"),
            new Carro("hyundai", "genisis"),
            new Carro("ford", "fusion v6"),
            new Carro("jeep", "renegado"),
            new Carro("pejo", "607"),
            new Carro("honda", "si gen 8")
        );

        $tabela = new Tabela($carros, $colunas, $pagina);
        echo $tabela;
    ?>

    <div class="paginacao">

        <?php 
            for($i = 1; $i <= ceil(count($carros)/10); $i++) {
                echo '<a href="?pagina=' . $i . ' ">' . $i . '</a>';
                echo ' ';
            }
        ?>
    </div>

</body>
</html>
