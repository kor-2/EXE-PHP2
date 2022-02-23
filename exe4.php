<h1>Exercice 4</h1>

<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale <br>
    (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/Le tableau passé en argument sera le suivant: <br>
    $capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
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

$capitales = ['France' => 'Paris', 'Allemagne' => 'Berlin', 'USA' => 'Washington', 'Italie' => 'Rome', 'Espagne' => 'Madrid'];

function afficherTableHTML(array $tableau)
{
    asort($tableau);
    $return = '<table><thead><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr></thead><tbody>';

    foreach ($tableau as $pays => $capital) {
        $return .= "<tr><td> $pays </td>";
        $return .= "<td> $capital </td>";
        $return .= "<td> <a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>Lien</a> </td></tr>";
    }
    $return .= '</tbody></table>';

    return $return;
}

echo afficherTableHTML($capitales);
