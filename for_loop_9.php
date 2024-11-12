<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label>Count To:</label>
        <br> 
        <input type="text" name="counter" placeholder="Count To">
        <input type="submit" value="For_Loop">
    </form>
    <?php
    // Count To
    $counter = $_POST['counter'];
    
    for($i=1; $i < $counter;$i++){
        echo "$i<br>";
    }
    ?>
    <hr>
    <br>

    <form>
        <label>Count From:</label>
        <br>
        <input type="text" name="from" placeholder="Count From">
        <input type="submit" value="Count From">
    </form>
    
    <?php
        $count_from = $_POST['from'];
        for($i=$count_from;$i>0;$i--){
            echo "From: {$i}<br>";
        }
    ?>
    <hr>
</body>
</html>
