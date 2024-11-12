<?php
// COOKIES PHP
/*
    These are stored in the Browser
    They are used to Track users activites on the Website
    Cookies Help Ensure Users Get Relevant ADs While Browsing

    Cookies are Stored As Key-Value Pairs i.e ASSCOS

    Once Cookies are Created Expire time is specified in Secs
*/

// Creating Cookes
    // The Cookie Expires Afte 1 Day
    // The time() Function return the total Seconds since 1970 

setcookie("Foods", "drinks", time()+(86400*1),"/");

// Creating Cookied That are destroyed at Closing the Browser

setcookie("Education", "Hacking-Course",-0,"/");


// Iterating All Cookies On the Site 
foreach($_COOKIE as $key => $values){
    echo "{$key} = {$values}<br>";
}


// Checking If Cookie is Set so as To load an AD
if(isset($_COOKIE["Foods"])){
    // Checking if Cookie is Created

    echo "Displaying Food Related ADs";
}
else{
    echo "No ADs to be Displayed";
}

// Deleting Cookies

setcookie("Foods","drinks",-0,"/");

// Checking IF cookies are Deleted

foreach($_COOKIE as $key => $values){
    echo "{$key} = {$values}<br>";
}
?>
