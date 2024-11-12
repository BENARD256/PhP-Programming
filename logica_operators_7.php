<?php
// Logical Operators
/*
    Logical Operatos
    They are used for checking more than 1 condition.
        // --> or
        && --> and
        ! 
*/

// Voting System.
echo "AND LOGICAL OPERATOR<br><br>";
$age = 18;
$citizen = false;

// Using And to check if Individual is Citizen & above 18 years

if($age >=18 && $citizen){
    echo "You can Vote<br>";
}
else{
    echo "Unfortunately Your Not Eligible to Vote.<br>";
}

// Using the Not Logical Operator.

echo "<br>NOT LOGICAL OPERATOR<br><br>";
$age = 2;
$citizen = false;

if ( !$age <=18 && !$citizen ){
    echo "You can Vote<br>";
}
else{
    echo "Your not Eligible to Voting.<br>";
}

echo "<br><br>OR LOGICAL OPERATOR <br><br>";
$age = 10;
$citizen = true;

if($age>18 || $citizen){
    echo "We Pray you Vote";
}
else{
    echo "You're not Eligible to Voting <br>";
}
?>
