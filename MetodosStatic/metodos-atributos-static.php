<?php
    //Com metodos estaticos, não é necessário instaciar a classe, somente chamar a "classe"::"metodo".
    class Login {
        public static $user;

        public static function verificaLogin(){
            echo "O user ".self::$user." está logado!";
        }

        //Examente aqui, poderiamos criar um metodo "não estatico" e o instanciar em seguida, não haveria problema.
    }

    Login::$user = "admin";
    Login::verificaLogin();