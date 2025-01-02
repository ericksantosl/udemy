<?php
    session_start();
 

    $usuarios_autenticado = false;

    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd']
    ];

    foreach($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarios_autenticado = true;
        }
    };

    if ($usuarios_autenticado) {
        echo 'Usuário liberado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }
?>