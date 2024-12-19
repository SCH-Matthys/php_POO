<?php

class Voiture{
    // PUBLIC .................................................................
    // Attibuts //////
    // public $couleur;
    // public $nbrPortes;

    // Constructeur //////
    // function __construct($couleur="Blanc",$nbrPortes=5){
    //     $this->couleur = $couleur;
    //     $this->nbrPortes = $nbrPortes;
    // }
    
    // METHODES .................................................................
    // public function rouler(){
    //     echo "Vroum vroum la voiture.";
    // }

    // public function presentation(){
    //     echo "La voiture posède ".$this->nbrPortes." portes et est de couleur ".$this->couleur.".";
    // }

    // PRIVATE .................................................................
    // Attibuts //////
    private $color;
    private $nbrPortes;
    private $tank;
    private $tankValue;
    private $conso;
    private $compteur;
    private $light;

    public function getColor(){
        return $this->color;
    }

    public function setColor($value){
        $this->color = $value;
    }
    
    public function getNbrPortes(){
        return $this->nbrPortes;
    }

    public function setNbrPortes($value){
        $this->nbrPortes = $value;
    }

    public function getTank(){
        return $this->tank;
    }

    public function setTank($value){
        $this->tank = $value;
    }

    public function getTankValue(){
        return $this->tankValue;
    }

    public function setTankValue($value){
        $this->tankValue = $value;
    }

    public function getConso(){
        return $this->conso;
    }

    public function setConso($value){
        $this->conso = $value;
    }

    public function getCompteur(){
        return $this->compteur;
    }

    public function setCompteur($value){
        $this->compteur = $value;
    }

    public function getLight(){
        return $this->light = false;
    }

    public function setLight($value){
        $this->light = $value;
    }

     // Constructeur //////
    function __construct($color,$nbrPortes,$tank,$tankValue,$conso,$compteur){
        $this->setColor($color);
        $this->setNbrPortes($nbrPortes);
        $this->setTank($tank);
        $this->setTankValue($tankValue);
        $this->setConso($conso);
        $this->setCompteur($compteur);
        $this->setLight(false);
    }
    // METHODES .................................................................
    public function light(){
        if($this->light = true){
            $light = false;
            return "Les phares sont eteints.";
        } else{
            $this->light = true;
            return "Les phares sont allumés.";
        }
    }

    public function infoGlobal(){
        echo " C'est un modèle ".$this->nbrPortes." portes de couleur ".$this->color.".<br>";
        echo " La consomation est de ".$this->conso."L/100 et le réservoir fait ".$this->tank." litres.<br>";
    }

    public function tBord(){
        echo $this->light() ." , le réservoir est à ". $this->tankValue ." / ". $this->tank ."L.<br> Vous avez roulé ".$this->compteur." de km au total.<br>";
    }

    public function rouler($value){
        // echo "Vous decidez de rouler ".$value." km.<br>";
        // $consom = ($value * ($this->conso / 100));
        // if($consom < $this->tankValue){
        //     echo "Vous roulez ".$value." km. Vous avez consomé ".$consom." litres.<br>";
        //     $this->setTankValue($this->tankValue - $consom);
        //     $this->setCompteur($this->compteur + $value);
        // }else{
        //     echo "Pas assez de carburant.<br>";
        //     echo "Vous n'avez pu faire que ";
        // }
        $distanceInitiale = $value;
        while ($value > 0) {
            if ($this->tankValue > 0) {
                $this->compteur++;
                $this->tankValue--;
            } else {
                echo "Le réservoir est vide après avoir roulé " . ($distanceInitiale - $value) . " km.<br>";
                return;
            }
            $value--;
        }
    
        $consom = ($distanceInitiale * $this->conso) / 100;
    
        echo "Vous avez roulé " . $distanceInitiale . " km. Vous avez consommé " . $consom . " litres.<br>";
    }

    public function fill(){
        $this->setTankValue($this->tank);
        echo "Vous faites le plein.<br>";
    }
}