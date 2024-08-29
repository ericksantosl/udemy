<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function imposto($salario) {
            if ($salario <= 1903.98) {
                return 'Isento';
            } else if ($salario >= 1903.99 && $salario <= 2826.65) {
                return '7,5%';
            } else if ($salario >= 2826.66 && $salario <= 3751.05) {
                return '15%';
            } else if ($salario >= 3751.06 && $salario <= 4664.68) {
                return '22,5%';
            } else {
                return '27,5%';
            }
        }

        echo imposto(4000);
    ?>
</body>
</html>