<?php

// Declaring numbers
$a = 5;
$b = 3;
$c = 1.2;

//Increment operators
//echo $a++;
//echo ++$a;

//decrement operators
//echo $a--;
//echo --$a;

//Arithmetic operators
echo ($a + $b) + $c .  '<br>';
echo $a * $b . '<br>';
echo $a - $c . '<br>';

//Assignment with math operators
//$a += $b .'<br>'; 
//$a -= $b;
//$a *= $b;
//$a /= $b;

//Number checking function
is_float(1.25); // true
is_double(1.25); //true
is_int(5); //true
is_numeric("1.2"); //true
is_numeric("1j.2"); // false

//Conversation
$strNumber = '13.45';
$number = (float)$strNumber;
var_dump($number);
echo "<br>";
//Number function
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2, 3)" . pow(2, 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max( 2, 4, 8)" . max(2, 4, 8) . '<br>';
echo "round(2.4)" .  round(2.4) . '<br>';
echo "floor(2.6)" . floor(2.6) . "<br>";
echo "ceil(2.4)" . ceil(2.4) . '<br>';

//Formatting number
$number = 123456789.1234;
echo number_format($number, 3, '.', ' ');

?>
