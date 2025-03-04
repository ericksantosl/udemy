<?php
/*
    class Produto {
        public string $nome = "";
        public float $valor = 0;

        public function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }
*/

    class Produto {
        public function __construct(
            public string $nome = "",
            public float $valor = 0 
        ) {}
    }

    $produto = new Produto('Celular', 1300);

    echo "Produto: ".$produto->nome;
    echo "<br>";
    echo "Valor: ".$produto->valor;

?>