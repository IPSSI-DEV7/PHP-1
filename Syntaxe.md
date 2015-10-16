# La syntaxe de base
## Balises PHP

Lorsque PHP traite un fichier, il cherche les balises d'ouverture et de fermeture (<?php et ?>) qui délimitent le code qu'il doit interpréter. De cette manière, cela permet à PHP d'être intégré dans toutes sortes de documents, car tout ce qui se trouve en dehors des balises ouvrantes / fermantes de PHP est ignoré.

Si un fichier est purement du code PHP, il est préférable de ne pas placer la balise de fermeture à la fin du fichier. Ceci permet d'éviter d'oublier un espace ou une nouvelle ligne après la balise de fermeture de PHP, ce qui causerait des effets non voulus car PHP commencera à afficher la sortie, ce qui n'est souvent pas ce qui est désiré.

```php
<?php
echo "Bonjour le monde !";

// ... encore du code

echo "Dernière instruction";

// le script se termine ici, sans la balise de fermeture PHP
```

## Variable
En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.

Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un souligné (_), suivi de lettres, chiffres ou soulignés. Exprimé sous la forme d'une expression régulière, cela donne : `'[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'`

> Pour employer une image, une variable est une boîte, que le programme (l’ordinateur) va repérer par une étiquette. Pour avoir accès au contenu de la boîte, il suffit de la désigner par son étiquette.

![Variable](https://github.com/IPSSI-DEV7/PHP-1/blob/master/img/Variable.jpg)

## Affectation

L'opérateur d'affectation le plus simple est le signe "=". Le premier réflexe est de penser que ce signe veut dire "égal à". Ce n'est pas le cas. Il signifie que l'opérande de gauche se voit affecter la valeur de l'expression qui est à droite du signe égal.

La valeur d'une expression d'affectation est la valeur affectée. Par exemple, la valeur de l'expression `$a = 3` est la valeur 3. Cela permet d'utiliser des astuces telles que :

```php
<?php
$a = ($b = 4) + 5;
// $a est maintenant égal à 9, et $b vaut 4.
?>
```
### Affectation par référence

L'affectation par référence est aussi supportée, au moyen de la syntaxe `$var = &$othervar;`. L'affectation par référence signifie que les deux variables pointent vers le même conteneur de donnée, rien n'est copié nulle part.

[Example](https://github.com/IPSSI-DEV7/PHP-1/blob/master/Syntaxe/Reference.php)

## Structure de code
### if
### for
### foreach
### while / do ... while

## Tableau
