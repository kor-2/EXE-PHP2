<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP 2</title>
</head>
<body>
    <h1>Exercice PHP 2</h1>
    <ul>

    <?php  

    for ($i=1; $i < 16; $i++) { 
        echo "<li><a href='exe$i.php'>Exe $i</a></li>";
    }
    
    ?>
    </ul>

    
</body>
</html>