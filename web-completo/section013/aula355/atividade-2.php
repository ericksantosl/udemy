<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = [];

        while(count($numeros) <= 5) {
            $num = rand(1, 60);
            if (!in_array($num, $numeros)) {
                $numeros[] = $num;
                echo $num . ' ';
            }
        }

        echo'<hr>';

        print_r($numeros);
    ?>
</body>
</html>