<h1>Exercice 2</h1>

<p>
    Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant 
    (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: 
    afficherTableHTML($capitales);
</p>

<style>
    table,
    th,
    tr,
    td{
        border: 1px solid black ;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
    }
</style>
<?php

$capitales = ['France' => 'Paris', 'Allemagne' => 'Berlin', 'USA' => 'Washington', 'Italie' => 'Rome'];

function afficherTableHTML(array $tableau)
{
    ksort($tableau);
    $return = '<table><thead><tr><th>Pays</th><th>Capitale</th></tr></thead><tbody>';

    foreach ($tableau as $pays => $capital) {
        $return .= "<tr><td> $pays </td><td> $capital </td></tr>";
    }
    $return .= '</tbody></table>';

    return $return;
}

echo afficherTableHTML($capitales);
