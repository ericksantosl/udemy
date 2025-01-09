<?php
    session_start();
 

    $usuarios_autenticado = false;
    $usuarios_id = null;
    $usuarios_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234' 'perfil_id' => 1],
        ['id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234' 'perfil_id' => 2],
        ['id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234' 'perfil_id' => 2]
    ];

    foreach($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarios_autenticado = true;
            $usuarios_id = $user['id'];
            $usuarios_perfil_id = $user['perfil_id'];
        }
    };

    if ($usuarios_autenticado) {
        echo 'Usuário liberado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuarios_id;
        $_SESSION['perfil_id'] = $usuarios_perfil_id;
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }
?>