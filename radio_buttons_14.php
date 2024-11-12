<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="card" value="Visa">visa
        <br>
        <input type="radio" name="card" value="Master Card"> Master Card
        <br>
        <input type="radio" name="card" value="American Express" > American Express
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>
</body>
</html>

<?php 
// RADIO BUTTONS PHP
/*          
    Radion buttons Can Be grouped by Making them All belong to the same Array (Name)
    To Ensure Selection of Only 1 Radion they Should be having same Key (i.e Name)

    Below Code checks if Submit is pressed 
        Then checks if Atlease one Radio is selected
*/

// Check if Atleast 1 is Selected otherwise Error

if(isset($_POST['submit'])){

    if(empty($_POST['card'])){
        echo "<br>Atleast Check One<br>";
    }
    else{
        $credit_card = null;
        $credit_card = $_POST['card'];
        $credit_card = strtoupper($credit_card); // String to uppercase
        echo $credit_card." WAS SELETED<br>";
        
        // Checking if Set Key == Specific Values using Switch
        // Correct But Commented Due to Length

        /*
        switch($credit_card){
            case "Visa":
                echo "VISA CARD WAS SELECTED<br>";
                break;

            case "Master Card":
                echo "MASTER CARD WAS SELECTED<br>";
                break;

            case "American Express":
                echo "AMERICAN EXPRESS WAS SELECTED<br<";
                break;
            
            default:
                echo "NO VALID TYPE WAS SELECTED<br>";
                break;
        }
        */
    }

}

// Fetching all Pairs in Associative $_POST
echo "<br><br><br>ACCESSING ALL key-Value PAIRS<br>";
foreach($_POST as $key => $value){
    echo "{$key} = {$value}<br>";
}

?>

