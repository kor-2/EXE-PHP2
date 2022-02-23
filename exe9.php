<h1>Exercice 9</h1>

<p>
    Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").Exemple:<br>
    afficherRadio($nomsRadio);
</p>

<style>
 
</style>


<?php

$tableau = ['Masculin' => '', 'Féminin' => '', 'Autre' => 'checked'];

function afficherRadio(array $input)
{
    $return = '';
    foreach ($input as $val => $check) {
        $return .= "<input type='radio' $check id='$val' name='genre' value='$val'>
        <label for='$val'> $val</label><br>";
    }

    return $return;
}
echo afficherRadio($tableau);
