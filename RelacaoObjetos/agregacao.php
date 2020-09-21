<?php

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adicionar(Produtos $produtos) {
        $this->produtos[] = $produtos;
    }

    public function exibe() {
        foreach($this->produtos as $produto) {
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook","2000");
$produto2 = new Produtos("Headset","250");
$produto3 = new Produtos("Teclado","400");

$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);
$carrinho->adicionar($produto3);

$carrinho->exibe();