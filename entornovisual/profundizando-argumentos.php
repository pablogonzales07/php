<?php

/* function sumar_edades($edades= array(13, 17, 35)){
    return array_sum($edades);
}


echo sumar_edades(array(1, 2, 3));
echo "\n"; */


/* function multiplicar($n1 = 1,$n2 = 2,$n3 = 3,) 
{
    return $n1 * $n2 * $n3;
};

echo multiplicar(1, 2, 3);
echo "\n";  */

/* class UnaClaseRandom{}

class OtraClaseRandom{}


function receive_a_class($class = new UnaClaseRandom)
{
    echo $class::class; //UnaClaseRandom
}

receive_a_class(new OtraClaseRandom); */

function suma($n1, $n2 = 2)
{
    return $n1 + $n2;
}

echo suma(2);