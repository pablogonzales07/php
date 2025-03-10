<?php

/* $outside_variable = "Variable creada fuera del scope de
    la funcion";

function scope() {
    global $outside_variable;
    echo $outside_variable;
}; */

print_r($GLOBALS);