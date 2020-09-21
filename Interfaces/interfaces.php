<?php

    interface Crud {
        public function create();
        public function read();
        public function update();
        public function delete();
    }

    class Noticia implements Crud {

        public function create(){
            //criar
        }

        public function read(){
            //ler
        }

        public function update(){
            //atualizar
        }

        public function delete(){
            //deletar
        }
    }