<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $registros = ['noticia1', 'noticia2', 'noticia3'];
        $i = 0;

        while ($i < 3) {
            echo $registros[$i];
            echo '<br>';
            $i++;
        }
    ?>
</body>
</html>