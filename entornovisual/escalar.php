<?php

function calcular_area_triangulo(int $base, int $altura, string $nombre){
    return "Hola $nombre el area de tu triangula es " . 
        ($base * $altura)/2 . "!";
}


echo calcular_area_triangulo("hola", 4, "Pablo");
echo "\n";