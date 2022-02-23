<h1>Exercice 15</h1>

<p>
En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  
vérifier  si  une adresse e-mail a le bon format.<br>
Affichage<br>
L’adresse elan@elan-formation.frest une adresse e-mail valide<br><br>

<style>

</style>


<?php

function valide($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "L'adresse email '$email' est considérée comme valide. <br>";
    } else {
        return "L'adresse email '$email' est considérée comme invalide.<br>";
    }
}

$email1 = 'salut@gmail.com';
$email2 = 'salut';
echo valide($email1);
echo valide($email2);
