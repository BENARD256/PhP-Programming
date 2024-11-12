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
// Qn Write A Program to prompt user enter Country To Return it's Capital
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <h2>Enter Country To Get it's City:</h2>
        <input type="text" name="country" placeholder="Enter Country" required>
        <input type="submit" value="Get City" name="city">
    </form>

</body>
</html>

<?php
// Program Country Input Respond with Its City

$capitals = array(
    "Uganda" => "Kampala",
    "Kenya"=> "Nairobi",
    "Tanzania" => "Arusha",
    "Ethiopia"=> "AddisAbaba",
    "India"=> "New Delhi",
    "Japan"=> "Tokyo",
    "USA" => "Washington DC",
    "Nigeria"=> "Abuja",
    "Libya" => "Tripoli",
    "Egypt"=> "Cairo",
    "China"=> "Beinjing",
);

$country = $_POST["country"];

$country = ucfirst($country);// Capitalizing Before Operations
$exist = array_key_exists($country,$capitals); // If Country Exists

if($exist)
{
    echo "<h3>CAPITAL: {$capitals[$country]}</h3>";    
}
else
{
    echo "<script>alert('COUNTRY NOT AVAILABLE')</script>";
}

?>