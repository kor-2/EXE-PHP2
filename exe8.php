<h1>Exercice 8</h1>

<p>
    Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.Exemple:<br>
    repeterImage($url,4);

</p>

<style>
 
</style>



<?php

$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage(string $url, int $nb)
{
    $return = '';
    for ($i = 0; $i < $nb; ++$i) {
        $return .= "<img src='$url' alt='sympa'>";
    }

    return $return;
}

echo repeterImage($url, 5);
