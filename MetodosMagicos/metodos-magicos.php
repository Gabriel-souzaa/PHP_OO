<?php

class Pessoa {
    private $dados = array();

    public function __set($nome,$valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tentei imprimir";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Gabriel";
$pessoa->idade = 19;

// echo $pessoa->nome;
// echo $pessoa->idade;

//echo $pessoa; / __tostring

//echo $pessoa(); / __invoke