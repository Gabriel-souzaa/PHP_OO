<?php

    class Login {
        //Assim que public, conseguimos utilizar as veriaveis fora da classe.
        private $email;
        private $senha;
        private $nome;

        public function __construct($email, $senha, $nome) {
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        // SET é importante para o tratamento dos dados;
        public function setEmail($e){
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        // SET é importante para o tratamento dos dados;
        public function setSenha($e){
            $this->senha = $e;
        }

        public function Logar() {
            if($this->email == "gabriel@gmail.com" and $this->senha == "123"):
                echo "Logado com sucesso!!";
            else:
                echo "Dados invalidos";
            endif;
        }
    }
    $logar = new Login("gabriel@gmail.com", "123", "Gabriel Freitas");
    $logar->Logar();
    echo "<br>";
    echo $logar->getNome();
?>