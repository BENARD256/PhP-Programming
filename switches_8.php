<?php
// Case Statements
/*
The Case statements is a conditional Checking statement
That Helps overcome the use of longer elseif statements in the program.
*/
$grade = "G";

switch ($grade){
    case "A":
        echo "Exellent: 6 Points";
        break;

    case "B":
        echo "Very Good: 5 Points";
        break;

    case "C":
        echo "Good: 4 Points";
        break;
    
    case "D":
        echo "Fair: 3 Points";
        break;

    case "E":
        echo "Tried: 2 Points";
        break;

    case "F":
        echo "Poor: 1 Point";
        break;

    case "O":
        echo "Failed 0 Points";
        break;

    default:
        echo "{$grade} Has No Match";
        break;

}
?>
