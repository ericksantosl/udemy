<?php
    class Pessoa {
        public $nome = null;

        function __construct($nome) {
            echo 'Obejeto Iniciado';
            $this->nome = $nome;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Jorge');

    echo '<br>Nome: ' . $pessoa->__get('nome');

    echo '<br>' . $pessoa->correr();
?>