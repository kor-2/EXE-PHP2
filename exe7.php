<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.Exemple:<br>genererCheckbox($elements);

</p>

<style>
 
</style>



<?php

$choix = ["Choix 1","Choix 2","Choix 3"];


function genererCheckbox(array $input)
{
    
    foreach ($input as $val) {
        echo "<input type='checkbox' id='$val' name='$val' value='$val'";

        if ($val == "Choix 2") {
            echo "checked";
        }
        echo "><label for='$val'> $val</label><br>";
    }
    return;
}

genererCheckbox($choix);





