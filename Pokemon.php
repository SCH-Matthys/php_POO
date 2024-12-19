<?php

class Pokemon{
    // ATTRIBUTS ...................................
    private $nom;
    private $pv;
    private $type;
    private $atk;

    // GETTER SETTER NOM ............................
    public function getNom(){
        return $this->nom;
    }
    public function setNom($value){
        $this->nom = $value;
    }
    // GETTER SETTER PV ............................
    public function getPv(){
        return $this->pv;
    }
    public function setPv($value){
        $this->pv = $value;
    }
    // GETTER SETTER TYPE ............................
    public function getType(){
        return $this->type;
    }
    public function setType($value){
        $this->type = $value;
    }
    // GETTER SETTER ATK ............................
    public function getAtk(){
        return $this->atk;
    }
    public function setAtk($value){
        $this->atk = $value;
    }

    // CONSTRUCTOR ...................................
    function __construct($nom,$pv,$type,$atk){
        $this->setNom($nom);
        $this->setPv($pv);
        $this->setType($type);
        $this->setAtk($atk);
    }

    // METHODES .......................................
    public function pokedex(){
        echo "Le pokemon ".$this->nom." est de type ".$this->type.". <br> Il a ".$this->pv." PV et un puissance d'attaque de ".$this->atk.". <br>";
    }

    public function attaque($cible){
        echo $this->nom." fait ".$this->atk." de dégats à son adversaire. <br>";
        $cible->recoit($this->atk);
    }

    public function recoit($atk){
        if($atk < $this->getPv()){
            echo $this->nom." à désomrais ";
            $this->setPv($this->getPv() - $atk);
            echo $this->getPv()." PV. <br>";
        }else{
            echo $this->nom." est KO. <br>";
        }
    }
}