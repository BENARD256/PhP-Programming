<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="checkbox" name="foods[]"value="Oranges">Oranges
        <br>
        <input type="checkbox" name="foods[]"value="Lemons">Lemons
        <br>
        <input type="checkbox" name="foods[]" value="Apples">Apples
        <br>
        <input type="checkbox" name="foods[]"value="Tomatoes">Tomatoes
        <br><br>
        <input type="submit" name="confirm" value="Confirm">
        <br>
    </form>
</body>
</html>

<?php 
// CHECK BOXES PHP
/* 
The Check Boxed can Be Made Elements of An Array By Changing their names to

foods[] this should apply to all inputs in the Form 
    This tells the Server to expect Multiple Values
    And Store these values as an Arrays

Unlike the food as applied to Radions it tell the server to set the key food
To the value of the radion selected
*/

$foods = null;

if(isset($_POST["confirm"])){

    // Checking if Atleast one Box Checked
    if(empty($_POST["foods"])){
        echo "<br>Check Atleast One Category!<br><br>";
    }
    else{
        $foods = $_POST["foods"];
        foreach($foods as $food){
            echo "You Selected: {$food} <br>";
        }
    }
}

// Printing All key-value Pairs from Assoc $_POST
/*
foreach($_POST as $key => $value){
    echo "{$key} = {$value}<br>";
}
*/

// Empty() can be checked for a single Box if they have different keys(NAmes)
?>

