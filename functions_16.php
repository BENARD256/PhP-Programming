<?php 
// Function in PHP
/* 
    A Function is a Block of Code that is Executed wheneever its Name is called

    A function ensures reuserbility in PHP

    Declarations
        Functions canbe declared using the function keyword
*/

// Functions without Paremeters
function say_hello(){
    echo "Hello<br>";
}

say_hello();

// The Function takes an Arg of String

// Default Values set to variables 
function say_hi(string $name = "Guest", int $age = 0){
    echo "<br>HI {$name} Your are {$age} Years Old<br>";
}
// Printing the variable with Default Values
say_hi(); // Defaulted Perimeterss
say_hi("Benard Anzo", 21);
say_hi("The1%",20);


// Working with the return
    // When the Return is specified in ORder to retrieve the Function Results it should be PRinted

function calculate_sum(int $a, int $b, int $c){
    // Calculating sum of 3 numbers
    $sum = null;
    $sum = $a + $b + $c;
    return $sum;
}

// Determining result of Calculation
$sum_1 = calculate_sum(10, 20, 20);
echo "<br>Sum of 3 Numbers: {$sum_1}<br>";

$sum_2 = calculate_sum(100, 10, 130);
echo "<br>Sum of 3 Numbers: {$sum_2}<br>";



// Anonymous Functions : functions without names
// These are created and asigned to Varaibles

$multiply = function(int $a, int $b)
{
    return $a * $b;
};

echo "<br>Multplication Result: {$multiply(10,3)}<br>";

/*
Functions are declared using the Function key word
Parimeters of a function can be ketworded as well as type defined
    ie Defining the Type of data that is expected to be held in the Var

Anonymous functions are those without Names
    Once created they are assigned to  Variables names
*/

?>

