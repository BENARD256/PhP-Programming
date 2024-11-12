<?php
//HASHING PHP
/*
    This is the Process of tranforming a Password into A random String Of letters and Numbers before its stored in db

    Hashing is done using a Mathematical One-way function that Tranforms the Plain Test to cipher text

    Hashing prevents the Password from being intercepted by Third Parties :  Hackers

    PHP: Default Hashing Algorithm Bcrypt built Based on the Blowfish Algorithm 

    The Hash uses
        2y for the Algorithm
        22 characters for the Salt
        31 for the Password Hash
        5 characters for computational Overhead

        Fixed Length of 60 Characters thus the Column in the database should be > 60 

        @ timwe its run a new hash is generate for the password
*/

$password = "Password123";

// Hashing using the password_hash Function

$hash = password_hash($password, PASSWORD_DEFAULT); // Default Hashing Algo is Bycrpt
echo "<br>PASSWORD: {$password}<br>";
echo "<br>HASH: {$hash}<br>";

// Verifying the Hash using password_verify function

if(password_verify("Password123", $hash))
{
    echo "<br>Logged in Successfully<br>";
}
else
{
    echo "<br>Username or Password Incorrect<br>";
}

?>