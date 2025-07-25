<?php
    class Caracteristicas{
        private $id;
        private $brand;
        private $km;
        private $color;
        // acessar
        public function getId(){
            return $this->id;
        }
        // modificar
        public function setId($id){
            $this->id = $id;
        }
        // acessar
        public function getBrand(){
            return $this->brand;
        }
        // modificar
        public function setBrand($brand){
            $this->brand = $brand;
        }
        // acessar
        public function getKm(){
            return $this->km;
        }
        // modificar
        public function setKm($km){
            $this->km = intval($km);
        }
        // acessar
        public function getColor(){
            return $this->color;
        }
        //modificar
        public function setColor($color){
            $this->color = $color;
        }
    }
    // Criando uma classe DAO
    interface CaracteristicaDAOInterface {
        public function create(Caracteristicas $caracteris);
        public function findAll();
    }