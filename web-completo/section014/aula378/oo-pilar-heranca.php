<?php
    class Veiculo {
        public $placa = null;
        public $cor =  null;

        function acelerar() {
            echo 'Acelerar';
        }
    }

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinar';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');


    echo '<pre>';
    print_r($carro);
    echo '<hr>';
    print_r($moto);
    echo '</pre>';
?>