<?php

function validation(){
    
    include "../config/cfg.php";

    for ($i=0; $i < count($arr) ; $i++) { 
        if ($_REQUEST["$i"] != $arr[$i]) {
            echo "La palabra es incorrecta, la palabra es: " . $arr[$i] . "<br>";
            echo "\n";
        }else {
            echo "La palabra es correcta" . "<br>"; //<br> Realiza un salto de línea
        }   
    }
}

validation();

?>