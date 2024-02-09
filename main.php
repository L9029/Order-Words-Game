<?php

$palabras = array("hola", "luz", "sol", "casa");
$palabrasDesordenadas = array();

function des($arr, $arr2){
    $form = "<form action='analisis.php'>";
    $buttom = "<button type='submit'>Enviar</buttom>";
    $formCierre = "</form>";

    for ($i=0; $i < count($arr); $i++) { 
        $form .= "La palabra es: " . $arr2[$i] = str_shuffle($arr[$i]) . " " . "<input type='text' name=$i>". "<br>";
    }

    echo $form . $buttom . $formCierre;
}

des($palabras, $palabrasDesordenadas);

?>