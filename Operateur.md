# Opérateur
## Precedence des opérateurs
La priorité des opérateurs spécifie l'ordre dans lequel les valeurs doivent être analysées. Par exemple, dans l'expression 1 + 5 * 3, le résultat est 16 et non 18, car la multiplication ("*") a une priorité supérieure par rapport à l'addition ("+"). Des parenthèses peuvent être utilisées pour forcer la priorité, si nécessaire. Par exemple : (1 + 5) * 3 donnera 18.

Lorsque les opérateurs ont une précédence égale, leur association décide la façon dont les opérateurs sont groupés. Par exemple, "-" est une association par la gauche, ainsi 1 - 2 - 3 est groupé comme ceci (1 - 2) - 3 et sera évalué à -4. D'un autre côté, "=" est une association par la droite, ainsi, $a = $b = $c est groupé comme ceci $a = ($b = $c).

| Associativité |	Opérateurs | Information additionnelle |
| ------------- | ---------- | ------------------------- |
| gauche | `[` | array() | 
| droite | `**` | arithmétique | 
| droite | `++ -- ~ (int) (float) (string) (array) (object) (bool) @` | types et incrément/décrément | 
| droite | `!` | logique | 
| gauche | `* / %` | arithmétique | 
| gauche | `+ - .` | arithmétique et chaîne de caractères | 
| gauche | `<< >>` | bitwise | 
| non-associatif | `< <= > >=` | comparaison |
| non-associatif | `== != === !== <>` | comparaison | 
| gauche | `&` | bitwise et références | 
| gauche | `^` | bitwise | 
| gauche | `|` | bitwise | 
| gauche | `&&` | logique | 
| gauche | `||` | logique | 
| gauche | `? :` | ternaire | 
| droite | `= += -= *= **= /= .= %= &= |= ^= <<= >>= =>` | affectation | 
| gauche | `and` | logique | 
| gauche | `xor` | logique | 
| gauche | `or` | logique | 
| gauche | `,` | plusieurs utilisations | 
