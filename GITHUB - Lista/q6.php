<?php
$a = 15;
$b = 32;
$c = 21;

if ( $a > $b && $a > $c){
    echo $a, " é o maior número entre os três.";
}elseif ($b > $a && $b > $c){
    echo $b, " é o maior número entre os três.";
}elseif ($c > $b && $c < $a){
    echo $c, " é o maior número entre os três.";
}elseif ($a == $b && $a == $c){
     echo "Não existe número maior, pois ", $a, ", ", $b, " e ", $c, "são iguais";
}elseif ($a == $b){
    echo "Não existe número maior, pois ", $a, " e ", $b, "são iguais";
}elseif ($c == $a){
     echo "Não existe número maior, pois ", $a, " e ", $c, "são iguais";
}elseif ($c == $b){
     echo "Não existe número maior, pois ", $c, " e ", $b, "são iguais";
}
?>