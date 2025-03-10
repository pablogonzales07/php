<?php

class Dummy {
    public $un_valor = "Caulquier cosa";
}



function suma(Dummy $n1) : void {
    echo $n1->un_valor;
}

echo suma(new Dummy);
echo "\n";