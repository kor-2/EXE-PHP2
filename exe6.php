<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
Exemple:<br>
$elements = array("Monsieur","Madame","Mademoiselle");alimenterListeDeroulante($elements);
</p>

<style>
 
</style>



<?php

$genre = ['Monsieur', 'Madame', 'Mademoiselle'];

function alimenterListeDeroulante(array $input)
{
    $return = '<select name="genre">';
    foreach ($input as $val) {
        $return .= "<option value='$val'>$val</option>";
    }
    $return .= '</select>';

    return $return;
}

echo alimenterListeDeroulante($genre);
