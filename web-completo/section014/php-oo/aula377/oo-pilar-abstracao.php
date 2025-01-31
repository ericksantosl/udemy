<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecargar)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        /*
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }
        */

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($n) {
            $this->numFilhos = $n;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->resumirCadFunc();


?>