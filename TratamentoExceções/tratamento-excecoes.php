<?php

class Newslatter {
    public function validateEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception ("Este email é invalido", 1);   //Lançando Exceção.
        else:
            echo "Cadastrado com sucesso";
        endif;
    }
}

$latter = new Newslatter();
try {
    $latter->validateEmail("gabriel@"); 
}catch (Exception $e){
    echo "Menssagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
    echo "Linha: ".$e->getLine();
}