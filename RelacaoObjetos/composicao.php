<?php

    class Pessoa {
        public function atribuiNome($nome){
            return "Nome: ".$nome;
        }
    }

    class Exibe {
        public $pessoa;
        public $nome;

        function __construct($nome){
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibeNome(){
            echo $this->pessoa->atribuiNome($this->nome);
        }
    }

    $exibe = new Exibe("Gabriel");
    $exibe -> exibeNome();