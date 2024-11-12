<?php
session_start(); // Starting Session
include("header.html"); // Loading Headers
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Ui</title>
</head>
<body>
    
    <h4>Welcome ! Your Logged in</h4>

    <form action="" method="post">
        <input type="submit" name="logout"value="logout" size="20">
    </form>
</body>
</html>

<?php 

$username = $_SESSION["username"];
$password = $_SESSION["password"];

echo "USERNAME: {$username} PASSWORD: {$password}<br>";

if(isset($_POST["logout"])){
    session_start(); //Accessing Session Data
    session_unset(); // Unset All session Variables
    session_destroy();
    header("location: index.php");
    exit(); // Preveting Further Execution
}

include("footer.html"); // Footer to the Page
?>

