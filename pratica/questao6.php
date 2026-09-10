<?php
$a = 15;
$b = 32;
$c = 21;

if($a > $b && $a >$c){
    echo $a. " é o maior número!";
}else if($b > $a && $b >$c){
    echo $b. " é o maior número!";
}else if($c > $b && $c >$a){
    echo $c. " é o maior número!";
}else {
    echo "Deu ruim!";
}


?>