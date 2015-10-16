# Type
Le type d'une variable n'est pas toujours défini par le programmeur ; il peut être défini par PHP au moment de l'exécution, suivant le contexte dans lequel la variable est utilisée.

PHP supporte 8 types basiques.
4 types scalaires :

`boolean` `integer` `float` `string`

2 types composés :

`array` `object`

Et finalement, 2 types spéciaux :

`resource` `NULL`

## Typage
### Les entiers (Integer)
Un entier est un nombre appartenant à la classe `ℤ = {..., -2, -1, 0, 1, 2, ...}`.

Les entiers peuvent être spécifiés en notation décimale (base 10), hexadécimale (base 16), octale (base 8), ou binaire (base 2) optionnellement précédée d'un signe (- ou +).

Pour utiliser la notation octale, précédez le nombre d'un 0 (zéro). Pour utiliser la notation hexadécimale, précédez le nombre d'un 0x. Pour utiliser la notation binaire, précédez le nombre d'un 0b.

```php
<?php
  $a = 1234; // un nombre décimal
  $a = -123; // un nombre négatif
  $a = 0123; // un nombre octal (équivalent à 83 en décimal)
  $a = 0x1A; // un nombre héxadecimal (équivalent à 26 en décimal)
  $a = 0b11111111; // un nombre binaire (équivalent à 255 en decimal)
?>
```

La taille d'un entier est dépendant de la plate-forme, cependant, une valeur maximale d'environ 2 milliards est habituelle (cela correspond à 32 bits signés). Les plateformes 64-bit ont habituellement une valeur maximale d'environ 9E18. La taille d'un entier peut être déterminée en utilisant la constante `PHP_INT_SIZE`, et la valeur maximale, en utilisant la constante `PHP_INT_MAX`.

#### Débordement d'entier

Si PHP rencontre un nombre supérieur au maximal d'un entier, il sera interprété comme un nombre décimal. De la même façon, une opération qui résulte en un nombre supérieur au nombre maximal d'un entier, retournera un nombre décimal.

#### Conversion en entier

Pour convertir explicitement une valeur en un entier, utilisez soit le mot-clé `(int)`, soit `(integer)`. Cependant, dans la plupart des cas, ce mot-clé n'est pas nécessaire vu qu'une valeur sera automatiquement convertie si un opérateur, une fonction ou une structure de contrôle demande un entier en guise d'argument.

__Depuis un booléen__

`FALSE` correspond à 0 (zéro), et `TRUE` correspond à 1 (un).

__Depuis un nombre à virgule flottante__

Lorsque l'on convertit un nombre décimal en un entier, le nombre sera arrondi vers zéro.

__Depuis des chaînes de caractères__

Lorsqu'une chaîne de caractères est évaluée dans un contexte numérique, la valeur et le type résultants sont déterminés comme suit.

Si la chaîne de caractères ne contient aucun '.', 'e', ou 'E', et que la valeur numérique est dans l'intervalle de représentation des entiers (notamment, qu'elle est plus petite que `PHP_INT_MAX`), alors la chaîne de caractères sera transformée en entier. Dans les autres cas, elle sera interprétée comme un nombre décimal.

La valeur est fournie par la portion initiale de la chaîne de caractères. Si la chaîne de caractères commence par une donnée numérique valide, ce sera la valeur utilisée. Sinon, la valeur sera de 0 (zéro). Une donnée numérique valide est un signe optionnel, suivi par un ou plusieurs chiffres (contenant, optionnellement, un point décimal), suivi par, éventuellement, un exposant. L'exposant est un 'e' ou 'E' suivi par un ou plusieurs chiffres.

```php
<?php
  $foo = array();
  $foo[] = 1 + "10.5";                // $foo est un nombre à virgule flottante (11.5)
  $foo[] = 1 + "-1.3e3";              // $foo est un nombre à virgule flottante (-1299)
  $foo[] = 1 + "bob-1.3e3";           // $foo est un entier (1)
  $foo[] = 1 + "bob3";                // $foo est un entier (1)
  $foo[] = 1 + "10 Small Pigs";       // $foo est un entier (11)
  $foo[] = 4 + "10.2 Little Piggies"; // $foo est un nombre à virgule flottante (14.2)
  $foo[] = "10.0 pigs " + 1;          // $foo est un nombre à virgule flottante (11)
  $foo[] = "10.0 pigs " + 1.0;        // $foo est un nombre à virgule flottante (11)
  foreach($foo as $value) {
    echo "Le type de \$foo==$value; est " . gettype ($value) . "<br />\n";
  }

?>
```

### Les chaînes de caractère (String)

### Les Tableaux (Array)
