<h1>Exercice 13</h1>

<p>
    Créer une classe Voiture possédant les propriétés suivantes: marque, modèle, nbPorteset vitesseActuelleainsi que les méthodes demarrer( ),
    accelerer( )et stopper( )en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié
    est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
    v1 ➔"Peugeot","408",5<br>
    v2 ➔"Citroën","C4",3<br>
    Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence
    de la classe Voiture. Vous devez afficher les tests et les éléments suivants:
</p>

<style>

</style>


<?php


class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActu;
    private bool $_run;

    public function __construct($marque, $modele, $nbPortes, $vitesseActu = 0, $run = false)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActu = $vitesseActu;
        $this->_run = $run;
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

    public function get_nbPortes()
    {
        return $this->_nbPortes;
    }

    public function set_nbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
        return $this;
    }

    public function get_vitesseActu()
    {
        return $this->_vitesseActu;
    }

    public function set_vitesseActu($vitesseActu)
    {
        $this->_vitesseActu = $vitesseActu;

        return $this;
    }

    public function get_run()
    {
        return $this->_run;
    }

    public function set_run($run)
    {
        $this->_run = $run;

        return $this;
    }

    public function demarrer()
    {
        $this->set_run(true);
        echo "Le véhicule " . $this->get_marque() . " " . $this->get_modele() . " démarre <br>";
        return;
    }

    public function accelerer($vitesse)
    {
        if ($this->get_run() == true) 
        {
            $fast = $this->get_vitesseActu() + $vitesse;
            $this->set_vitesseActu($fast);
            echo "Le véhicule " . $this->get_marque() . " " . $this->get_modele() . " accélère de " . $this->get_vitesseActu() . " km / h <br>";
            return;
        }
        else 
        {
            echo "le véhicule ". $this->get_marque() . " " . $this->get_modele() . " veut accélerer de ". $vitesse ."<br>
            Pour accélerer, il faut démarrer le vehicule ". $this->get_marque() . " " . $this->get_modele() ." !";
            return;
        }
        
        
    }

    public function ralentir($vitesse)
    {
        $fast = $this->get_vitesseActu() - $vitesse;

        $this->set_vitesseActu($fast);

        echo "Le véhicule " . $this->get_marque() . " " . $this->get_modele() . " freine à  " . $this->get_vitesseActu() . " km / h <br>";
        return;
    }
    public function stopper()
    {
        $this->set_run(false);
        $this->set_vitesseActu(0);
        echo "Le véhicule " . $this->get_marque() . " " . $this->get_modele() . " est stoppé <br>";
        return;
    }

    public function __toString()
    {

        $dem = $this->get_run() == true ? "démarré" : "stoppé";
        return "
        <br>Info vehicule <br>
        **************************<br>
        Nom et modèle du véhicule : " . $this->get_marque() . " " . $this->get_modele() . " <br>
        Nombre de portes : " . $this->get_nbPortes() . " <br>
        Le véhicule " . $this->get_marque() . " est " . $dem . "<br>
        Sa vitesse actuelle est de : " . $this->get_vitesseActu() . "  km/h <br>";
    }

    

    
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);


$v1->demarrer();
$v1->accelerer(50);

$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);


echo "<br>$v1";
echo "<br>$v2";
