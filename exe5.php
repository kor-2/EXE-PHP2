<h1>Exercice 5</h1>

<p>
    Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.<br>
    Exemple:<br>
    $nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);
</p>

<style>
 
</style>



<?php

$input = ["Nom","Prénom","Ville"];


function afficherInput(array $input)
{
    
    foreach ($input as $val) {
        echo "<label for='$val'><p>$val</p><input type='text' name='$val'></label>";
    }


    return;

}

afficherInput($input);





