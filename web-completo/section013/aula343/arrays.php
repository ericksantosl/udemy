<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array('Banana', 'Morango', 'Uva');

        $lista[] = 'Abacaxi';

        var_dump($lista);
        echo '<hr>';
        print_r($lista);
    ?>
</body>
</html>