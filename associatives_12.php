<?php
// Associatives in PHP
/* 
    Associatives are advanced arrays made of Key Value Pairs
    Associative FUNCTIONS
    count() : Count Total Number of Pairs in the Associative
    array_pop() : Removes Last Pair in the Associative
    array_shift(): Removes first Pair in the Associative
    array_reverse($capitals) : Used to reverse the Associative
    array_flip($capitals) : This swaps the Value as Keys & Keys as Values
    array_keys() : Returns keys present in an Associative
    array_values(): Returns Values to Keys in Associative
    array_merge($associative1, $assoc2): Merges 2 Assiciatives
*/

//QN: User to Enter Country Click Submint We Return the Capital

$capitals = array(
    "Uganda" => "Kampala",
    "Kenya"=> "Nairobi",
    "Tanzania" => "Arusha",
    "Ethiopia"=> "AddisAbaba",
    "India"=> "New Delhi",
    "Japan"=> "Tokyo",
    "USA" => "Washington DC",
    "Nigeria"=> "Abuja",
    "Libya" => "Tripoli"
);

// Accessing Key Value
echo $capitals['Ethiopia'];

//Counting Associative Pairs
echo "<br>Total Pairs:".count($capitals)."<br>";


// Removing Last Pair From Associative
array_pop($capitals);

//Removing First Pair
array_shift($capitals);

// Adding New Key-Pair
$capitals['Egypt'] = "Cairo";

// Changing Value of Key Nigeria to Accra
$capitals['Nigeria'] = 'Accra';


// Swapping Key as Values and VVser
$capitals = array_flip($capitals);

// Reversing the Order of the Key-Value PAirs

$capitals = array_reverse($capitals);

// Iterating Associative
echo "<br>FOREACH LOOP<br>";

foreach($capitals as $key => $value){
    echo "<br>{$key} = {$value}<br>";
}

// Accessing Keys from an Associative
$keys = array_keys($capitals);
echo "<br>PRINTING VALUES<br>";
foreach($keys as $key){
    echo $key."<br>";
}

//Accessing Values
$values = array_values($capitals);
echo "<br>PRINTING VALUES<br>";

foreach($values as $value){
    echo $value."<br>";
}
?>