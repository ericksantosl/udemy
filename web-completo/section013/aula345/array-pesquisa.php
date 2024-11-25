<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //in_array()
        //array_search()

        $frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        /*
        echo '<pre>';
        print_r($frutas);
        echo '</pre>';

        $existe = in_array('Pera', $frutas);


        if ($existe) {
            echo 'Sim, o valor pesquisado existe no array!';
        } else {
            echo 'Não, o valor pesquisado não existe no array!';
        }

        echo array_search('Uva', $frutas);
        */

        $coisas = [
            'frutas' => $frutas,
            'pessoas' => ['João', 'Maria', 'José']
        ];

        echo '<pre>';
        print_r($coisas);
        echo '</pre>';
        
    ?>
</body>
</html>