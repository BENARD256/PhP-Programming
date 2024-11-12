<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="submit"  value="Break Loop" name="break">
        <br>
        <br>
    </form>
    <?php
// Controling Execution From Button

$count = 0;
$running = true;

while ($running){
    $count++;

    if(isset($_POST['break'])){
        $running = false;
    }
    else{
        echo "{$count}. Running....<br>";
        $count ++;
    }
}

?>

</body>
</html>

<?php
// While Loop
/*
    The while Loop Continues to Execute while the condition is correct

    A Condition Must Be set to Stop the Loop From running
*/

$counter = 0;
$isalive= true;

while($isalive){
    $counter ++;
    
    if($counter > 10){
        $isalive = false;
        exit;
    }
    else{
        echo "{$counter}<br>";
        echo "Eat ..<br>";
        echo "Cyber Security<br>";
        echo "Sleep<br>";
        echo "Repeat<br>";
        echo "<br><br>";
    }
}

?>
