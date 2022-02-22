<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la 
    fonction comme suit: convertirMajRouge($texte);
</p>

<?php 


function convertirMajRouge(string $text){

     echo "<p style=\"color:red\">". strtoupper($text) ."</p>";

    return ;
}

convertirMajRouge("salut");