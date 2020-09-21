<?php
    //Não pode instaciar uma classe abstrata
    abstract class Banco {
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        abstract protected function Sacar($s);
        abstract protected function Depositar($d);
    }

    class Itau extends Banco {

        public function Sacar($s){
            $this->saldo -= $s;
            echo "Sacou: ".$s;
        }

        public function Depositar($d){
            $this->saldo += $d;
            echo " Depositou: ".$d;
        }
    }

    $itau = new Itau();
    $itau->setSaldo(10000);
    echo "Saldo: ".$itau->getSaldo();
    $itau->Sacar(200);
    echo " Saldo: ".$itau->getSaldo();
    $itau->Depositar(200);
    echo " Saldo: ".$itau->getSaldo();