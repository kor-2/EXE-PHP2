<h1>Exercice 12</h1>

<p>
    La fonction var_dump($variable)permet d’afficher les informations d’une variable.Soit le tableausuivant : <br>
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<style>
    
</style>


<?php

$genre = [true, 'texte', 10, 25.369, ['valeur1', 'valeur2']];

function dump($data)
{
    $len = count($data);
    $return = '';

    foreach ($data as $d) {
        $return .= var_dump($d);
    }

    // for ($i = 0; $i < $len; ++$i) {
    //     switch ($data[$i]) {
    //         case gettype($data[$i]) == 'boolean':
    //             if ($data[$i] == 1) {
    //                 $return .= 'bool (true)<br>';
    //             } else {
    //                 $return .= 'bool (false)<br>';
    //             }
    //             break;
    //         case gettype($data[$i]) == 'string':

    //             $return .= 'string('.strlen($data[$i]).')    '.$data[$i].'<br>';

    //             break;
    //         case gettype($data[$i]) == 'integer':

    //             $return .= "int($data[$i])<br>";

    //             break;
    //         case gettype($data[$i]) == 'double':

    //             $return .= "float($data[$i]) <br>";

    //             break;
    //         case gettype($data[$i]) == 'array':

    //             var_dump($data[$i]);
    //             break;
    //     }
    // }

    return $return;
}
echo dump($genre);
