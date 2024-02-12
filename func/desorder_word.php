<?php

include ("../config/cfg.php"); //Importa el codigo de otro archivo de php

function desorder_words($arr, $arr2){

    include ("../config/cfg.php");

    for ($i=0; $i < count($arr); $i++) { 
        $form .= "La palabra es: " . $arr2[$i] = str_shuffle($arr[$i]) . " " . "<input type='text' name=$i>". "<br>";
    }

    echo $form . $buttom . $formCierre;
}

desorder_words($arr, $arr2);

?>