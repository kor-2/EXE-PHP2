<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la 
    fonction comme suit: convertirMajRouge($texte);
</p>

<style>
    .red{
        color: red;
    }
</style>

<?php

function convertirMajRouge(string $text)
{
    return '<p class="red">'.mb_strtoupper($text).'</p>';
}

echo convertirMajRouge('Bonjour : )');
