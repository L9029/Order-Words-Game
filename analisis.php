<?php

$arr = array("hola", "luz", "sol", "casa");

for ($i=0; $i < count($arr) ; $i++) { 
    if ($_REQUEST["palabra$i"] != $arr[$i]) {
        echo "La palabra es incorrecta, la palabra es: " . $arr[$i];
    }else {
        echo "La palabra es correcta";
    }   
}

?>