<?php

function michi(){
    echo "Miau";
}

function dogo(){
    echo "Wof";
}

function zorro(){
    echo "Zorro no te lo lleves";
}

$function = readline("Que funcion desea ejecutar: ");
$function();