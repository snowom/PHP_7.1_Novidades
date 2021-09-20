<?php

//Versões anteriores - Usando função list();
echo '<b>Usando função list() - Versões Anteriores do PHP</b><br>';

$array = [1, 2, 3];
list($x, $y, $z) = $array;
echo $x;


//Usando Array Destructuring - Versão PHP >= 7.1
echo '<br><br><b>Usando Array Destructuring - Versão PHP >= 7.1</b><br>';

$array = [1, 2, 3];
[$x, $y, $z] = $array;
echo $x;


echo '<br><br><b>Usando Array Destructuring - Array Associativo</b><br>';

$array = ['index1' => 1, 'index2' => 2];
['index1' => $x, 'index2' => $y] = $array;
echo $x;

?>