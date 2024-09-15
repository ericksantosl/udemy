<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = [];

        $lista['frutas'] = ['banana', 'uva', 'morango'];
        $lista['pessoas'] = ['jose', 'maria', 'belt'];

        echo '<pre>';
        print_r ($lista);
        echo '</pre>';
    ?>
</body>
</html>