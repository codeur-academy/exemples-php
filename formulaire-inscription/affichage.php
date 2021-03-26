<?
 // Traitement

 // Enregistrement du nom dans le tableau
 $liste_apprenants[] = $_GET["nom"] 
?>

<!-- Affichage -->

<?
    foreach ($liste_apprenants as $value) {
     echo $value;
    }
?>