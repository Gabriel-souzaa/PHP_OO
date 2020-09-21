<?php
    //Private - somente dentro da classe - PAI
    //Protected - somente dentro da classe - PAI e classes estendidas
    //public - Dentro ou fora fora das classes
    class Veiculo {
        Protected $modelo;
        Private $cor;
        public $ano;

        public function Andar(){
            echo "O carro/moto está andando";
        }

        public function Parar(){
            echo "A moto/carro está parado";
        }
    }

    //Todos os metodos/atributos foram atribuidos a classe CARRO/MOTO estendendo a classe Veiculo
    class Carro extends Veiculo {
        public function LimparParabrisa() {
            echo "Limpando parabrisa";
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getModelo($m) {
            return $this->modelo;
        }
    }

    class Moto extends Veiculo {
        public function CortarGiro(){
            echo "Bololololololo";
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getModelo($m) {
            return $this->modelo;
        }
    }

    $carro = new Carro();
    $carro-> setModelo("GOL");
    $carro->ano = "2019";
    $carro->Andar();
    $carro->LimparParabrisa();
    var_dump($carro);
    
    $moto = new Moto();
    $moto-> setModelo("Hornet");
    $moto->ano = "2019";
    $moto->Parar();
    $moto->CortarGiro();
    var_dump($moto);
?>