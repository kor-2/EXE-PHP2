<h1>Exercice 14</h1>

<p>
    Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:Peugeot 408: $v1 = new Voiture("Peugeot","408");BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: echo $v1->getInfos()."<br/>";echo $ve1->getInfos()."<br/>";
</p>

<style>

</style>


<?php


class Voiture {
    private string $_marque;
    private string $_modele;

    public function __construct($marque , $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function get_marque()
    {
            return $this->_marque;
    }

    public function set_marque($marque)
    {
            $this->_marque = $marque;

            return $this;
    }

    public function get_modele()
    {
        return $this->_modele;
    }

    public function set_modele($modele)
    {
        $this->_modele = $modele;

        return $this;
    }
    
    public function getInfos(){
        echo $this->get_marque()." ". $this->get_modele()."<br>";
        return ;
    }
}

class VoitureElec extends Voiture{
    private int $_autonomie;

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function get_autonomie()
    {
        return $this->_autonomie;
    }

    public function set_autonomie($_autonomie)
    {
        $this->_autonomie = $_autonomie;

        return $this;
    }
    public function getInfos(){
        echo $this->get_marque()." ". $this->get_modele()." a une autonomie de ". $this->get_autonomie()." km<br>";
        return ;
    }
}




$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

$v1->getInfos();
$ve1->getInfos();