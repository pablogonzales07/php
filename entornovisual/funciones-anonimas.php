<?php

/* $numbers = [1, 2, 3, 4];
$numbers_by_2 = array_map(function($current){
    return $current *2;
}, $numbers);

print_r($numbers_by_2); */


$michi = "Mr. Michi";
$change_michi_name = function ($hola) use ($michi) {
    echo $michi;
    echo "\n";
    echo $hola;
};

echo $change_michi_name("Holaaaaaaaaaaaa");
echo "\n";