<?php
    include_once('../models/Caracteristicas.php');

    class CaraceteristicaDAO implements CaracteristicaDAOInterface {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn; 
        }

        public function create(Caracteristicas $caracteris){
            $stmt = $this->conn->prepare("INSERT INTO caracteristicas(brand, km, color) VALUES (:brand, :km, :color)");
            $stmt->bindValue(":brand", $caracteris->getBrand());
            $stmt->bindValue(":km", $caracteris->getKm());
            $stmt->bindValue(":color", $caracteris->getColor());
            $stmt->execute();

        }

        public function findAll()
        {
            
        }
    }