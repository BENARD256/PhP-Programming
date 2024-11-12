<?php 
// WORKING WITH STRINGS PHP

/*

*/
$username = "benard";
$phone = "+256-002-433-334";
// Upper First Char
$username = ucfirst($username);

// Lower First Char
$username = lcfirst($username);

// First Letter @ word to UpperCase
$username = ucwords($username);

//String to Lower Case
$username = strtolower($username);

// String to UpperCase
$username = strtoupper($username);

// Determining Lenght of String

$length = strlen($username);

echo "length: {$length}<br>";

// String Replications : Repeating A string Multiple Times

$username = str_repeat($username, 3);

// String Replacement char_2_replace, new_Char, Str
$phone = str_replace("-", "", $phone);
echo "<br>Phone: {$phone}<br>";

// String Shuffling
$username = str_shuffle($username);


echo $username;


// String Comparison
    // If Both equal == 0
    // Other wise 1 or -1
$name1 = "Anzo";
$name2 = "Anzo";
$result = strcmp($name1, $name2);
echo "<br>Comparison Result: {$result}<br>";

//Removing White Space
$name  = "A   n    z    o";
$name = trim($name);

echo "<br> Trimed String: {$name}<br>";
$len = strlen($name);
echo $len;

// String to Arrays
// The String is Converted to Array with a Whitespace Separator

$phone = explode("-", $phone);
foreach($phone as $phone){
    echo "Element: {$phone}<br>";

}

// Array to String

$phone = implode($phone);
echo "Reverse: {$phone}<br>"; 

// Position Determing Str

$pos = strpos($phone,"+");
echo "Position: {$pos}<br>";
?>

