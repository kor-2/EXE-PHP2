<h1>Exercice 9</h1>

<p>
    Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").Exemple:<br>
    afficherRadio($nomsRadio);
</p>

<style>
 
</style>


<?php

$tableau = ["Masculin","Féminin","Autre"];


function afficherRadio(array $input)
{
    foreach ($input as $val) {
        echo "<input type='radio' id='$val' name='$val' value='$val'";

        //$val == "Madame" ? "checked" :"";
        if ($val == "Autre") {
            echo "checked";
        }
        echo "><label for='$val'> $val</label><br>";
    }
    return;
    
}
afficherRadio($tableau);


