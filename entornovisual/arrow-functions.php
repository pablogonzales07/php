<?php

/* $cajero = 0;

$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20);
echo "\n";
 */

//$add_cajero = fn($add) => $cajero += $add; //No debe realizarse

/* $edades = array(5, 21, 50 ,9, 18);

$mayores_de_edad = array_filter($edades, fn ($current) => 
                                                $current >= 18);

print_r($mayores_de_edad); */

$where_i_am = "Mexico";

$change_where_i_am = fn(&$where_i_am) => $where_i_am = "Colombia";
$change_where_i_am($where_i_am);

echo $where_i_am;
echo "\n";