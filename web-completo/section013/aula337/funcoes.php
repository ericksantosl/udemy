<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

        //função void
        function exibirBoasVindas() {
            echo 'Bem-vindo ao curso de PHP!<br>';
        }

        exibirBoasVindas();

        //função com retorno
        function calcularArea($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularArea(3, 4);
    ?>
</body>
</html>