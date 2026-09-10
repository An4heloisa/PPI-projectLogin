<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$media=0;
$qtmaior=0;
$qtmenor=0;
$maior = $notas[0]=7.5;
$menor = $notas[0]=7.5;
$soma = 0;

foreach($notas AS $nota){
    $soma = $soma + $nota;
    if($nota >= 6){
        $qtmaior++;
    }else{
        $qtmenor++;
    }

    if($nota > $maior){
        $maior = $nota;
    }
    if($nota < $menor){
        $menor = $nota;
    }

}
  
$media = $soma / count($notas);
echo "media: ". $media;
echo "\nquantos alunos possuem nota maior ou igual a 6: " .$qtmaior;
echo "\nquantos alunos possuem nota menor ou igual a 6: " .$qtmenor;
?>