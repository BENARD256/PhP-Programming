<?php include("database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Authentication Page</h3>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label>USERNAME</label>
        <input type="text" name="username" required size="25"><br>
        <br>
        <label>PASSWORD</label>
        <input type="text" name="password"required size="25"><br>
        <br>
        <label>EMAIL</label>
        <input type="email" name="email"required size="25"><br>
        <br>
        <input type="submit" name="register" value="Register"size="20">
    </for>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$username = filter_input(INPUT_POST, $_POST['username'], FILTER_SANITIZE_STRING);
    $username = htmlspecialchars(trim($_POST['username']));
    $password = filter_input(INPUT_POST, $_POST["password"], FILTER_SANITIZE_STRING);
    //$email = filter_input(INPUT_POST, $_POST["email"], FILTER_VALIDATE_EMAIL);
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);

    // Checking if field not Empty

    if(empty($username)){
        echo "Username Required.<br>";
    }
    elseif(empty($password)){
        echo "Password Required.<br>";
    }
    elseif(empty($email)){
        echo "Email Required. <br>";
    }
    else{
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        // Database insertion

        $query = "INSERT INTO logins (username, password, email) values ('$username', '$pass_hash', '$email')";
        
        try{
            $insert = mysqli_query($connection, $query);
            echo "<script> alert('Operation Successfully')</script>";
        }
        catch(mysqli_sql_exception $e){
            echo "Username Already Taken<br>";
        }
        
        mysqli_close($connection);
 
    }
}

?>
