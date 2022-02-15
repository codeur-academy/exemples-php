# Entrée et Sortie

## echo 

- Il permet d'afficher une chaîne de caractères
- Il n’est pas vraiment une fonction mais une construction de langage. 
  - Cependant, il se comporte comme une fonction.
- Il ne se comporte pas comme une expression
  - Il n'a pas de valeur de retour
- Il peut prendre plus d'un paramètre lorsqu'il est utilisé sans parenthèses.
- Aucune nouvelle ligne ou espace est ajouté entre deux echo
- Les chaînes (paramètres) peuvent être passés soit individuellement comme plusieurs arguments ou concaténé ensemble et passés en tant qu'un seul argument
- Les expressions qui ne sont pas des chaînes sont convertie en chaîne
- Différence entre simples quotes et doubles quotes
  - Les doubles évaluent les variables alors que les simples ne le font pas
- Le retour à la ligne *\\n*
  - Vous pouvez remarquer ce retour à ligne dans le code source HTML et non sur l'affichage de la page sur le navigateur.
  - car, pour faire un retour à la ligne dans la page, il faut une balise de type Bloc.

## echo : syntaxe courte

- echo dispose aussi d'une syntaxe courte, où vous pouvez faire suivre immédiatement la balise PHP ouvrante d'un signe égal (=). 

## print 

- print — Affiche une chaîne de caractères
- La différence majeure avec echo est que print n'accepte qu'un seul argument et retourne toujours 1.


## Entrée 

La saisie des valeurs en PHP se fait par passage des paramètres à une page web.

Nous allons voir ça dans le chapitre : passage des paramètres à une page web.

## Références 
- [echo](https://www.php.net/manual/fr/function.echo.php)