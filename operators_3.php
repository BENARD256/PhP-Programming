<?php
// Operators PhP

/*
    Arithmetic Operators
        + * / - %

    Increment / Decrement Operators

    -- ++ +=3 -=3

    Operator Precidence ==> This determines How Expressions will be Computered ie Left to right
        (), **

*/
$a = 10;
$b = 2;
$c = null;

// Arithmetic
$c = $a + $b;
echo "Addition: {$c}<br>";
$c = $a * $b;
echo "Multiplication: {$c}<br>";

$c = $a / $b;
echo "Division: {$c}<br>";

$c = $a ** $b;
echo "Exponention: {$c}<br>";

$c = $a % $b;
echo "Modulus: {$c}<br>";

// Increment - Decrement

$counter = 0;
$counter ++;
echo "Incremented To: {$counter}<br>";
$counter --;
echo "Decrementd To: {$counter}<br>";

$counter +=4; // Incerementing the Counter By 4
echo "Incrementing By: {$counter}";


// Precedence Determines The ORder Of execution of Operations.

?>
