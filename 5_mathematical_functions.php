<?php
// Mathematical Functions in Php
/*
    There Exist Various Mathematical Function to Accomplish Various Task
        abs() --> Returns an absolute value ie 
            if -100 Then 100

        round() --> Rouding an Float Number
            if round(, 3) --> It Round to 3dps
        
        floor(a) --> Rounds to the Smallest value
        ceil(a) --> Rounds to the Next Integer
        powa,b) --> Raises b to a
        sqrt()
        pi() --> returns 3.14 constant

        max(a,b,c) --> Returns the Max of the 3 integers provided
        min(a,b,c) --> Returns the Min of the 3 provided

        rand() --> Generate a random string of numbers
            Default Length is 10
            rand(1,6) --> Generates a random number between 1-6

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Radius, Circum and Aread of Circle</h1>
        <label>Radius:</label>
        <br>
        <input type="text" name="radius"required placeholder="Enter Circle Radius">
        <input type="submit" value="Determine">
    </form>
    <br>
    <?php
        // Radius, Circumferance of a circle

        $radius = $_POST['radius'];
        $area = null; // pi R**2
        $circum = null; //2piR
        $vol = null;


        $circum = 2 * pi() * $radius;
        $circum = round($circum,3);
        echo "Circumference: {$circum}<br>";

        $area = pi() * $radius**2;
        $area = round($area, 2);
        echo "Area: {$area}cm<br>";

        $vol = 4/3 * pi() * $radius ** 2;
        
        $vol = round($vol,2);
        echo "Volume: {$vol}<br>";
    ?>
    <hr>


    <form action="" method="post">
        <h1>Mathematical Functions</h1>
        <label>x:</label>
        <input type="text" name="x" required placeholder="Value X"><br><br>
        <label>y:</label>
        <input type="text" name="y"required placeholder="Value Y"><br><br>
        <input type="submit" value="Calculate">

    </form>

<br>
<?php
$x = $_POST['x']; 
$y = $_POST['y'];

$total = null;
$random = null;

// $total = abs($x);
$total = sqrt($x);
echo "Sqrt: {$total}<br>";

$total = floor($x);
echo "Floor: {$total}<br>";

$total = ceil($x);
echo "Ceil: {$total}<br>";

$total = pi();
$total = round($total, 2); // Using Round Function to round pi
echo "PI: {$total}<br>";

$total = pow($x, $y);
echo "Powers: {$total}<br>";

$total = max($x, $y);
echo "Max is: {$total}<br>";

$total = min($x, $y);
echo "Min is: {$total}<br>";

// Random Number Generation
$random = rand();

echo "Random: {$random}"

?>

<hr>
</body>
</html>
