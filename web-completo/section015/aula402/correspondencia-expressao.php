<?php

    $busca = 5;

    switch ($busca) {
        case '1':
            $retornoSwitch = 'Encontrou o texto 1';
            break;
        case 2:
            $retornoSwitch = 'Encontrou o número 2';
            break;
        default:
            $retornoSwitch = 'NÃO encontrou';
    }

    echo "Resultado switch: ".$retornoSwitch;

    $retornoMatch = match ($busca) {
        '1' => 'Encontrou o texto 1',
        1 => 'Encontrou o número 1',
        default => 'NÃO encontrou'
    };

    echo "<hr>";
    echo "Resultado match: ".$retornoMatch;
?>