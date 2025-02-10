<?php
    //atributos e métodos estáticos não precisam ser instanciados para o acesso

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um método estático';
        }

        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    //echo Exemplo::$atributo1;
?>