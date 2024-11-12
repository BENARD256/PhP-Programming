<?php
// Working with Variables & DataTypes in Php
/*
Php is Dynamically typed thus types of variables id determined automatically
Strings 
Int
Float
Booleans

Variablea are Declaired with the $Dollar Sign

*/
$name = "Anzo Benard";
$age = 21;
$gpa = 4.95;
$is_online = True;

echo "Hello: {$name}<br>";
echo "You are {$age} Years Old.<br>";
echo "Course GPA: {$gpa}<br>";

//echo "Is Online: {$is_online}<br>";
if ($is_online==True) {
    echo "Is Online: True";
}
else{
    echo "Is Online: False";
}

?>
