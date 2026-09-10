<?php 
$contador = 20;
while($contador >= 0){
    echo "$contador ";
    if($contador % 5 == 0){
        echo " (Esse número é múltiplo de 5) ";
    }
    $contador--;
}

echo " Contagem encerrada!";


?>