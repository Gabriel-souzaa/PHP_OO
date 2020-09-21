<?php

    //Associação ocorre quando um objeto utiliza o outro

    class Pedidos {
        public $num;
        public $client;
    }

    class Cliente {
        public $nome;
        public $end;
    }

    $cliente = new Cliente();
    $cliente->nome = "Gabriel";
    $cliente->end = "Helena Steimber, 107";

    $pedido = new Pedidos();
    $pedido->num = "10920920";
    $pedido->client = $cliente;

    $dados = array(
        "numero" => $pedido->num,
        "nome_cliente" => $pedido->client->nome,
        "endereco" => $pedido->client->end
    );

    var_dump($dados);