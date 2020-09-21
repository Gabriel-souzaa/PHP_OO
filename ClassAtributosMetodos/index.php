<?php
    class Pizzas {
        public $estabeleimento;
        public $client;
        public $pizza;
        public $desc;

        public function Comprou() {
            echo $this->client." comprou uma pizza de ".$this->pizza;
        }
    }

    $pizzaria = new Pizzas();
    $pizzaria->estabelecimento = "Pizzaria Freitas";
    $pizzaria->client = "Gabriel Freitas";
    $pizzaria->pizza = "Pizza de Frango";
    $pizzaria->desc = "Frango, queijo, requeijão";
    $pizzaria->Comprou();
    echo "<br>".$pizzaria->estabelecimento;
?>