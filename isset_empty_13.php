<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label>username:</label>
    <input type="text" name="username" placeholder="Username" required><br>
    <br><label>Password</label>
    <input type="text" name="password" placeholder="Password"><br>
    <br><input type="submit" name="login"value="login">
    </form>
<?php
// Working With Post Associative
// Simulating Login with isSet

// its Advised to Use both Required on Client Side and empty() on server side when checking empty inputss
if(isset($_POST['login'])){
    // Check if Username Entered

    if(empty($_POST['username'])){
        echo '<br>Username Missing<br>';
    }

    elseif(empty($_POST['password'])){
        echo "<br>Password Missing<br>";
    }
    else{
        echo "Welcome Logged in as {$_POST['username']}<br>";
    }
}

// Accessing the Associative key pairs in $_POST array

foreach($_POST as $key => $value){
    //echo "{$key} = {$value}<br>";
    echo "<br>Values: {$value}<br>";
}
?>
</body>
</html>

<?php 
// ISSET ISEMPY
/* 
    ISSET Builtin Function
        Returns True If a Variable is 
            Declared
            Not Null

    ISEMPTY Builtin Function
        Returns True if a Variable is
            Not Declared
            Variable is set to Null
            Variable is set to False
            Variable is set to Empty string ""
            
*/
echo "<br><br> ISSET Function <br>";

// Working with ISSET()
// False when Not declared, Var=Null

$username = 'benar  d';
$pasword = false;

 

echo "Username:".isset($username)."<br>";
echo "Password:".isset($pasword);
echo "<br>Logged in:".isset($login)."<br>";

if(isset($username)){
    echo "True Variable is Set<br>";
}
else{
    echo "False Variable is Not Set";
}

echo "<br><br> EMPTY Function <br>";
// Working with empty() Builtin

// The Empty Function Returns True if
//Variable is 
    //Empty
    //Null
    //Not Defined
    //Set to False

$istall = false;
$isnull = null;
$empty_str = "";
echo empty($istall); // Return 1 for Var set to False
echo empty($notDeclared); // Return 1 For Not Declared Var
echo empty($isnull); // Var Set to Null Return 1
echo empty($empty_str); // Vari Set Empty Str return 1

if(empty($username)){
    echo "<br>True. Variable is Empty<br>";
}
else{
    echo "<br>False. Variable is not Empty<br>";
}

?>