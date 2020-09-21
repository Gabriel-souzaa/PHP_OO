<?php

    class Pessoas {
        public $idade;

        public function __clone() {
            echo "Clonagem";
        }
    }

    $pessoa = new Pessoas();
    $pessoa->idade = 20;

    $pessoa2 = clone $pessoa;
    $pessoa2->idade = 30;

    echo $pessoa->idade;