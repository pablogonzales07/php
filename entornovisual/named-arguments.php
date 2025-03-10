<?php

function get_person_info($name, $age, $country)
{
    echo "Tengo la informacion de $name , tiene $age años y 
        vive en $country";
};

$name = 'Pablo';
echo get_person_info(
    name: $name,
    country: "Aargentina",
    age: 25
);

echo "\n"; 