<?php
// VALIDATION * SANITIZATION
/*
SANITIZATION
    This Involes Taking the input from the inputfiled and Stripp of Some characters 
    This helps to prevent User  Command Injections ie XSS etc


VALIDATIONS
    This involves checking that the Data Provided by the User Via the Forms is of the Correct Data Type
    
    i.e If Numbers are expected the validation checks to see of user Provided Numbers in the Filed.
    Other wise if 
    When User Input Doesnt Pass the Validation it Returns Empty String

Ensuring input from the Webinput isnt Direcrtly Passed can help limit the rate of
Command injection from user

SANITIZATION

    FILTER_SANITIZE_STRING

        This handles texts
            It Eliminates Harmfull tags, Special Chars as well as Malicious Input

        Prevents
            SQLi Injections 

    FILTER_SANITIZE_SPECIAL_CHARS

        This handles Stripping and Sanitization of MAlicious Input
        Prevents
            XXS Targetting  User Input Fields
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
    <form method="post" action="">
        
        USERNAME: <input type="text" name="username"><br><br>
        AGE: <input type="text" name="age"><br><br>
        EMAIL: <input type="email" name="email"><br><br>
        <input type="submit" name="login" value="login"><br>

    </form>
</body>
</html>

<?php

function sanitize(){

    if(isset($_POST['login'])){
        // Concept of Sanitization
        // Data from input Field shoudn't Be assigned Directyl however it should be Stripped 
        // to eliminate Dangerious Character | symbols that might be appended to it.

        // USERNAMES

        // sanitize_string : Eliminates Tags. Sepecial Char as well as potentially Malicioud Input
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        // XXS Sanitization
        //$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        // AGE - Num Sanitization
        // If Sanitization is done to Malicious input its assigned to Empty String;
        $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);
        
        // Email Sanitization
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
        echo "Hello {$username} You are {$age} Years Old Message You Back at {$email}<br>";
    }
}


function validate(){
    if(isset($_POST['login'])){
        echo "Login Pressed";

        // Validation Ensuring Input is of Expected Types

        $username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_REGEXP);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "Invalid Character Obtained";
        }
        else{
            echo "Your AGE : {$email}<br>";
        }
        echo "Hello {$username} You are {$age} Years Old Message You Back at {$email}<br>";
    
    }


}

// validate();

// sanitize();

/*
CODE IS BUGGED

*/
?>
