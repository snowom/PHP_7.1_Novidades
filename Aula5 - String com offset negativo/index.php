<?php

//Utilizando offset negativo em uma String
    echo '<b>Utilizando offset negativo em uma String - Acessando como um Array</b><br>';
    $text = "abcdef";
    $result = $text[-2];
    echo $result;


    echo '<br><br><b>Utilizando offset negativo em uma String - Usando função substr()</b><br>';
    $text = "abcdef";
    $result = substr($text, -2, -1);
    echo $result;
?>