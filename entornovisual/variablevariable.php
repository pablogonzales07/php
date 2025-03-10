<?php

$variable = "nombre";
$$variable = "Pabliten";

echo $nombre; //Pabliten
echo "\n"; 


$nombre = "Carlitos";
$edad = 11;
$comida_favorita = "Lasagna con berenjena";

$variable = readline("Escribe que variable quieres 
                conocer: ");

echo $$variable; 
echo "\n";