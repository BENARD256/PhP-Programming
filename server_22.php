<?php
// $_SERVER  SUPER GLOBAL VAR  PHP
/*
    The Variable store Information related to website as Key-Value Pairs

    CONTEXT_DOCUMENT_ROOT : This returns the Absolute PAth to the Hosting Root /opt/lamp/htdocs/php/

    PHP_SELF : This Point to the Php File name
        This can be used in combination with the HTMLSPECIALCHARS($_SERVER['PHP_SELF']) To help ensure protection from XSs

    REQUEST_METHOD : Post | get DEpending on the Method used by the Form
    
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
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])//With Protection from xSS;?>">
        USERNAME: <input type="text" name="username"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
    
</body>
</html>

<?php

// Iterating all Key-Value Pairs in $_SERVER
//foreach($_SERVER as $key => $value){
//    echo "{$key} = {$value}<br>";
//}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "REQUEST SENT<br>";
}

// Approach 2
/*

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])){
    echo "REQUEST SENT<br>";
}
*/

?>




