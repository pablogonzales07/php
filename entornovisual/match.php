<?php

function get_country_name_switch($country){

    $name = "";
    switch ($country) {
        case 'MX':
            $name = "México";
            break;
        case 'COL';
            $name = "Colombia";
            break;
        case 'EUA';
            $name = "Estados unidos americanos";
            break;    
        default:
            $name = "Lo siento no conozco ese pais";
            break;
    }
    return $name;
}

function get_country_name_match($country){

    return match($country){
        "MX" => "Mexico",
        "COL" => "Colombia",
        "EUA" => "Estados unidos Americanos",
        default => "Lo siento no conozco ese pais"
    };
}



echo get_country_name_switch("AR");
echo "\n";
echo get_country_name_match("MX");
echo "\n";