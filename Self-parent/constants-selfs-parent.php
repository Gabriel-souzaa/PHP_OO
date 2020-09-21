<?php

    class Pessoa {
        const nome = "Gabriel Freitas";

        public function exibirNome(){
            echo self::nome;
        }
    }

    class Gabriel extends Pessoa {
        const nome = "Souza";

        public function exibirNome(){
            echo parent::nome;
        }
    }

    $p = new Gabriel();
    $p-> exibirNome();