<?php include("database.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Database Storage</h3>

    <form method="post" <?php htmlspecialchars($_SERVER['PHP_SELF'])?>">

        <label>USERNAME</label>
        <input type="text" name="username" placeholder="Username" size="20" required><br><br>
        <label>PASSWORD</label>
        <input type="password" name="password" size="20" required><br><br>
        <input type="submit" name="register"value="Register" size="15">
        <hr>
    </form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Fetching Logins
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitization
    $password = filter_var(trim($password),FILTER_SANITIZE_NUMBER_INT);
    $username = filter_var(trim($username), FILTER_SANITIZE_STRING);
    echo $password;
    // Hashing Password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    try{
        // Database Insertion

        $insert_query = "INSERT INTO Accounts(username, password) value('$username', '$password_hash')";

        $query_result = mysqli_query($connection, $insert_query); 

        echo "<script> alert('Operation Successfully')</script>";
    }
    catch(mysqli_sql_exception $e)
    {
        echo "". $e->getMessage() ."";
        mysql_close($connection); // Closing Connection if Error
    }
}

?>
