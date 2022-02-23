<h1>Exercice 10</h1>

<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  
    champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: 
    «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).
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

$inputs = [
    'Nom' => 'text',
    'Prenom' => 'text',
    'E-mail' => 'email',
    'Ville' => 'text',
    'Sexe' => 'radio', ];

function afficherInput(array $input)
{
    $return = '';
    foreach ($input as $val => $type) {
        if ($type == 'radio') {
            $return .=
            "<p>$val</p>
                
                    <input type='radio' id='M' name='$val' value='M'><label for='M'>M</label>
                    <input type='radio' id='F' name='$val' value='F'><label for='F'>F</label>";
        } else {
            $return .= "<label for='$val'><p>$val</p><input type='$type' name='$val'></label>";
        }
    }

    return $return;
}

$jobs = ['Développeur Logiciel', 'Designer web', 'Intégrateur', 'Chef de projet'];

function alimenterListeDeroulante(array $input)
{
    $return = '<select>';
    foreach ($input as $val) {
        $return .= "<option value='$val'>$val</option>";
    }
    $return .= '</select>';

    return $return;
}

function showForm(array $info, array $job)
{
    $return = "<form method='get'>";
    $return .= afficherInput($info);
    $return .= '<br>';
    $return .= alimenterListeDeroulante($job);
    $return .= "<input type='submit'></form>";

    return $return;
}

echo showForm($inputs, $jobs);
