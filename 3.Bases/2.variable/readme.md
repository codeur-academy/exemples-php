# Variables

## Affectation par valeur
- Les variables sont toujours assignées par valeur. C'est-à-dire, lorsque vous assignez une expression à une variable, la valeur de l'expression est recopiée dans la variable.
  -  Cela signifie, par exemple, qu'après avoir assigné la valeur d'une variable à une autre, modifier l'une des variables n'aura pas d'effet sur l'autre.

## Affectation par référence

- PHP permet aussi d'assigner les valeurs aux variables par référence. 
  - Cela signifie que la nouvelle variable ne fait que référencer (en d'autres termes, "devient un alias de", ou encore "pointe sur") la variable originale. 
  - Les modifications de la nouvelle variable affecteront l'ancienne et vice versa.
- Pour assigner par référence, ajoutez simplement un & (ET commercial) au début de la variable qui est assignée (la variable source). 

## Références 
- [Variable](https://www.php.net/manual/fr/language.variables.basics.php)