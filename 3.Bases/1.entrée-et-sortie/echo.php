<?php

echo "<h1>La somme de deux nombres </h1>";

// Retour à la ligne 
// Vous pouvez remarquer ce retour à ligne dans le code source HTML 
// et non sur l'affichage de la page sur le navigateur
// car, pour faire un retour à la ligne dans la page, il faut une balise de type Bloc.

echo "\n"; 

// Les chaînes peuvent être passé soit individuellement comme plusieurs arguments 
echo '<p>', 'x ', 'et ', 'y', '</p>';

// ou concaténé ensemble et passé en tant qu'un seul argument
echo '<p>'.'x '.'et ' . 'y' . '</p>';

// // Aucune nouvelle ligne ou espace est ajouté ; 
// ci-dessous affiche "La somme de X et Y" tout sur une ligne
echo "<p> x ";
echo "et y</p>";

// Les expressions qui ne sont pas des chaînes sont convertie en chaîne, même si declare(strict_types=1) est utilisé
$x = 1;
$y = 2;
$somme = $x + $y;
echo "<p>$x + $y = $somme <p>";

// Différence entre simples quotes et doubles quotes
echo '<p>$x + $y = $somme <p>';
echo "<p>$x + $y = $somme <p>";

 
?>