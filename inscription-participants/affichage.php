<?
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $liste_apprenants = [];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['counter'] ) ) {
    $liste_apprenants =  $_SESSION['counter'] ;
 }else {
    $_SESSION['counter'] =  $liste_apprenants;
 }

 // Ajouter le nom du nom dans le tableau
 $liste_apprenants[] = $_GET["nom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['counter'] =  $liste_apprenants;

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des participants</h1>
<ul>
    <?
        foreach ($liste_apprenants as $value) { 
        ?>
        <li><?=$value?></li>
        <?
        }
    ?>  
</ul>
</body>
</html>