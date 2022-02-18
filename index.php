<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade POO Web II</title>
</head>
<body>
    <h2>Criando estrutura HTML utilizando classes PHP</h2>
    <?php
        include 'autoload.php';

        $meta = array (
            new Meta("name", "content"),
            new Meta("name2", "content2"),
            new Meta("name3", "content3"),
            new Meta("name4", "content4")
        );
        $title = new Title("Atividade POO Web II");
        $head = new Head($meta, $title);

        $li = array(
            new Li("1"), 
            new Li("2"), 
            new Li("3"), 
            new Li("4")
        );
        $ul = new Ul($li);
        $body = new Body($ul);

        $html = new Html($head, $body);

        echo $html;
    ?>
</body>
</html>
