<?php
$a = 3;
$b = &$a; // $b est une référence à $a

print "$a\n"; // affiche 3
print "$b\n"; // affiche 3

$a = 4; // change $a

print "$a\n"; // affiche 4
print "$b\n"; // affiche 4 aussi, car $b est une référence à $a, qui a été
              // changée
?>
