<?php

// Affectation par valeur
$a = 1;                     // Assigne la valeur 1 à $a
$b = $a;                    // Copier $a dans $b.
$b = 2;                     // Modification du  $b
echo " x = $a , y = $b" ;   // la valeur de $a n'est pas modifiée

// Affectation par référence
$x = 1;                     // Assigne la valeur 1 à $x
$y = &$x;                   // Référence $y avec $x.
$y = 2;                     // Modification du  $y
echo " x = $x , y = $y" ;   // $x est aussi modifiée
?>