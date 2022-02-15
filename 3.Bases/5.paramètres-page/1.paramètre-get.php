<?php
// Utilisation des paramètres : Get
 
$nom = "Valeur de paramètres";
if (isset($_GET["nom"])) {
    $nom =     $_GET["nom"];
} else {    
    $nom = "Page sans paramètres";
}
?>

<?=$nom?>