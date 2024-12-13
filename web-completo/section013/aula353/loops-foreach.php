<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $itens = array('sofá', 'mesa', 'cadeira', 'fogao');

        foreach($itens as $item) {
            echo "$item <br>";
        }
    ?>
</body>
</html>