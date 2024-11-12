<?php
// SESSIONS PHP
/*
    Sessions Ensure that The User stays Logged in Accross Pages of the Website

    When Working Sessions They Should Be  started before th HTML
    When a User is Logged in They are Assigned Session IDs

    Security
        Set Expiration Time for the Session Ids 

*/
session_start(); // Started A Session

include("header.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        USERNAMES  <input type="text" name="username" size="20"><br><br>
        PASSWORD <input type="password" name="password" size="20"><br>
        <br>
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>

<?php

if(isset($_POST['login'])){
    // Checking if Input Fields arent Empty
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        //$username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_REGEXP); //Validation
        //$username = filter_var($username, FILTER_SANITIZE_STRING); // Sanitization

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // Making a redirect to home.php
        header('location:home.php');

        echo $_SESSION["username"]."<br>";
        echo $_SESSION["password"]."<br>";
    }
    else{
        echo "Username or Password Empty";
    }
}

?>

<?php include("footer.html");?>
