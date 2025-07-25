<?php
    include_once("db.php");
    include_once("models/Caracteristicas.php");
    include_once("dao/CaracteristicaDAO.php");
    
    $particularidades = new CaraceteristicaDAO($conn);
    $brand = $_POST['brand'];
    $km = $_POST['km'];
    $color = $_POST['color'];
    
    $novaParticularidades =  new Caracteristicas();
    $novaParticularidades->setBrand($brand);
    $novaParticularidades->setKm($km);
    $novaParticularidades->setColor($color);
    
    $particularidades->create($novaParticularidades);
    
    header("Location: index.php");
