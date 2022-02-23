<h1>Exercice 11</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.Exemple: <br>
    formaterDateFr("2018-02-23");
</p>

<style>
  
</style>


<?php

function formaterDateFr(string $date)
{
    $d = new DateTime($date);
    $day = datefmt_create('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    return datefmt_format($day, $d);
}

echo formaterDateFr('1998-02-20');
