<?php

    class Login {
        //Assim que public, conseguimos utilizar as veriaveis fora da classe.
        private $email;
        private $senha;

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
    $logar = new Login();
    $logar->setEmail("gabriel@gmail.com");
    $logar->setSenha("123");
    $logar->Logar();
    echo "<br>";
    echo $logar->getEmail();
?>