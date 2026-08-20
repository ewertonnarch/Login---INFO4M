<?php 
$cont = 20;

while ($cont != 0) {
    if ($cont % 5 == 0) {
        echo $cont, " (múltiplo de 5).";
    }else{
        echo $cont;
    }
    $cont--;
}
echo "Contagem encerrada!!!!";
?>