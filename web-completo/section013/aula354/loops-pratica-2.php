<!DOCTYPE html>
<html lang="enpt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $funcionarios = array('João', 'Maria', 'Julia');

        foreach($funcionarios as $idx => $nome_funcionarios) {
            echo 'ID ' . $idx . ' - ' . $nome_funcionarios . '<br>';
        }
    ?>
</body>
</html>