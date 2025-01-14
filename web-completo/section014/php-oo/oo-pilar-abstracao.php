<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = 'José';
        public $telefone = null;
        public $numFilhos = 2;

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($n) {
            $this->numFilhos = $n;
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();

    $y->modificarNumFilhos(4);
    echo $y->resumirCadFunc();

?>