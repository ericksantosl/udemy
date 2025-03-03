<?php
    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: ".$destinatarios."<br>";
        echo "CC: ".$cc."<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem: ".$mensagem."<br>";
    }

    sendEmail(
        "jorge@argus-academy.com",
        "teste@teste.com.br",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados no PHP 8"
    );

    echo "<hr>";

    sendEmail(
        "jorge@argus-academy.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados no PHP 8"
    );

    echo "<hr>";

    sendEmail(
        destinatarios: "jorge@argus-academy.com",
        assunto: "Argumentos Nomeados",
        mensagem: "Dominando a feature de argumentos nomeados no PHP 8"
    );
?>