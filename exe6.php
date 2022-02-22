<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
Exemple:<br>
$elements = array("Monsieur","Madame","Mademoiselle");alimenterListeDeroulante($elements);
</p>

<style>
 
</style>



<?php

$genre = ["Monsieur","Madame","Mademoiselle"];


function alimenterListeDeroulante(array $input)
{
    echo "<select>";
    foreach ($input as $val) {
        echo "<option value='$val'>$val</option>";
    }
    echo "</select>";
    return;
}

alimenterListeDeroulante($genre);





