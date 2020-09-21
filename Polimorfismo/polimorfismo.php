<?php
    //Polimorfismo é substituir ou reescrever um metodo da classe PAI.
    class Animal {
        public function Andar(){
            echo "O animal andou";
        }

        public function Correr(){
            echo "O animal está correndo";
        }
    }

    class Cavalo extends Animal {
        public function Andar(){
            $this->Correr();
        }
    }

    $animal = new Cavalo();
    $animal->Andar();