<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.Exemple:<br>genererCheckbox($elements);

</p>

<style>
 
</style>



<?php

$choix = ['Choix 1' => '', 'Choix 2' => 'checked', 'Choix 3' => ''];

function genererCheckbox(array $input)
{
    $return = '';
    foreach ($input as $val => $check) {
        $return .= "<input type='checkbox' $check id='$val' name='$val' value='$val'><label for='$val'> $val</label><br>";
    }

    return $return;
}

echo genererCheckbox($choix);
