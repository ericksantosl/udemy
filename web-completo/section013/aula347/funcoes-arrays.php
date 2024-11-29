<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $array = 'String';
        $retorno = is_array($array);

        if ($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }
    //

    ?>
</body>
</html>