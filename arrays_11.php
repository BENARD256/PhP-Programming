<?php
// Arrays in PHP
/* 
    Arrays is a Builtin that is used to Store Elements of the Same type.

    ARRAY FUNCTIONS
    count() : Count Total Number of Elements in Array
    array_pop() : Removes Last element in Array
    array_shift(): Removes first Element in Array
    array_unshift(): Adding Element to the First Index in Array
    array_push($foods, 1,2,3,4,5) : It can be Used to add 1 or More Elements at the End
    array_reverse($foods) : Used to reverse the Array

*/
$foods = array(
    "Oranges",
    "Mangoes",
    "Apples",
    "PineApples",
    "Tomatoes",
    "Ovacadoes",
    "Guavoes",
    "Onions"
);

//Using Foreach loop
echo "<br>ITERATION OF ARRAY USING FOREACH LOOP<br>";

foreach ($foods as $food){
    echo "{$food}<br>";
}


// Accessing Last Element Of Array
echo "<br>Last Element: {$foods[count($foods) -1]}<br>"; // Accessing Last Element If Length Not Known

// Changing Element Via Index
$foods[0] = "Maize";
echo "<br>First Element Changed To: {$foods[0]}<br>";

//Counting Arrays Elements
$total = count($foods);
echo "<br>Total Elements:{$total}<br>";

// Poping Last Element
array_pop($foods);

// Poping First Element Maize
array_shift($foods);

// Adding Elements at the Start of Array 
array_unshift($foods,"Oranges");

// Appending To End of Array
array_push($foods,"Lemons", "SugarCanes", "Eggplants", "Eggs", "Rices");


// Reversing Elements of Array
$foods = array_reverse($foods);

//Iteration Using For Loop
echo "<br>ITERATION OF ARRAY USING FOR LOOP<br>";

for($i=0;$i<=count($foods)-1; $i++){
    echo "{$i} {$foods[$i]}<br>";
}
?>
