<?php include("database.php"); ?>

<?php
// Retrieving From Database
// If the Database is note Emtpy it will retrieve a single row
// For Many Rows then the Loop must be Considered as shown Below

$query = "SELECT * FROM Accounts WHERE username='admin'";
$result = mysqli_query($connection, $query);

function on_row(object $result){
    if(mysqli_num_rows($result) > 0){
        echo "One Entty<br>";
        // Below Line will REturn a single Row
        $row = mysqli_fetch_assoc($result); // Associate Array
        // Key Column name, VAlue User Data in the Column

        foreach($row as $key => $values){
            echo "{$key} = {$values}<br>";
        }
    }
    else{
        echo "No Entry";
    }
}

// Returning 1 Row
// on_row($result);

// Retrieving Multiple Records
$query = "SELECT * FROM Accounts";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    // Fetch Next Row Since its Loop then All
    while($row = mysqli_fetch_assoc($result)){
        // Records Technique 1
        /*
        echo $row["id"]."<br>";
        echo $row["username"]."<br>";
        echo $row["password"]."<br>";
        echo $row["reg_date"]."<br>";
        echo "<br><br>";
        */

        // Records Technique 2
        foreach($row as $key => $values){
            echo "{$key} = {$values}<br>";
        }
        echo "<br><br>";
    }
}

?>
