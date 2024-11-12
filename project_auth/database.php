<?php

$db_server = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "Business";
$connection = null;

try
{
    $connection = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}

catch(mysqli_sql_exception)
{
    echo "Database Server Not Running";
    exit();
}

catch(Exception $e)
{
    echo "ERROR {$e} Occured<br>";
    exit();
}


?>