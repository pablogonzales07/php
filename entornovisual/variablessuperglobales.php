<?php

$michi = "Que michi mi maikita";

echo "<pre>";
var_dump($_GET);
echo "</pre>";

function local_scope(){
    echo $_GET["michi"];
};

local_scope();