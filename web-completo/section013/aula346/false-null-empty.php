<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //false
        //null e empty

        $funcionario1 = null;
        $funcionario2 = '';

        if(is_null($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, essa variável não é null';
        }

        echo '<br>';

        if(is_null($funcionario2)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, essa variável não é null';
        }
    ?>
</body>
</html>