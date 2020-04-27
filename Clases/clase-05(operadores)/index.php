<?php
//Operadores Aritmeticos
$num1 = 55;
$num2 = 33;


echo 'Suma: ' . ($num1 + $num2). '<br>';
echo 'Resta: ' . ($num1 - $num2). '<br>';

$mult = $num1*$num2;

echo 'Multiplicación :'.$mult.'<br>';
echo 'División: ' . ($num1 / $num2). '<br>';
echo 'Modulo: ' . ($num1 % $num2). '<br>';


// Operadores De incremento y Decremento
$year =2020;
$year++;
echo 'Inc $var++: ' . $year. '<br>';

++$year;
echo 'Inc ++$var: ' . $year. '<br>';

$year--;
echo 'Dec $var--: ' . $year. '<br>';

--$year;
echo 'Dec --$var: ' . $year. '<br>';

//Operadores de asignación 
$edad =55;
echo $edad. '<br>';
echo ($edad+=5). '<br>';
echo ($edad-=5). '<br>';
echo ($edad*=5). '<br>';
echo ($edad/=5). '<br>';

?>
