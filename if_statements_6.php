<?php
// IF - Statements
/*
  It Helps In checking for Conditions allowing code Exec if condition is evaluated.

  Order Of conditioning must Be maintained.
  */

$age = 10;

if($age >= 100){
    echo "Your Too Old";
}

elseif($age >= 18){
    echo "You Can access the Site";
}


else{
    echo "You're Below 18";
}

?>