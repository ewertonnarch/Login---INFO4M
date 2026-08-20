<?php
    $numero = 475;

    if($numero % 3 == 0 && $numero % 5 == 0){
        echo $numero, " é múltiplo de 3 e 5.";
    } elseif ($numero % 5 == 0){
        echo $numero, " é múltiplo de 5, mas não de 3.";
    } elseif ($numero % 3 == 0){
        echo $numero, " é múltiplo de 3, mas não de 5.";
    } else{
        echo $numero, " não é múltiplo nem de 3, nem de 5.";
    }
?>