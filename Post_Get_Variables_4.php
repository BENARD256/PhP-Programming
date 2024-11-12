<?php
// $_POST & $_GET Special Global Variables

// These are special Variables used for fetching Information from Html Forms

/*
The Variables store Information as an Array which ca be Accessed by Specification of the Name of the input

$_GET Special Method.
    The Get Method is Not secure i.e Senstive information is passed in the UR:
    Its suitable for Search Pages
    Has a Character Limit
    Pages that Implement $_GET can be Bookmarked
    Pages with it Can be Cached

$_POST Special Global
        Is Secure 
        Used for Submission of Senstive Information
        Cannot Be booked Marked
        Can't Be Cached
        Senstive Information is embedded in the HTML Request
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
    <form action="" method="get">
        <h1>CUSTOMER DETAILS</h1>
        <label>Username: </label>
        <br>
        <input type="text" name="username" required><br>
        <label>Password: </label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login" name="submit">
    </form>


<?php
// Accessing the Login Form

$username = $_GET['username']; // Accessing the Input via its name
$password = $_GET['password']; // Accessing Password field via its name

echo "<br>USERNAME: \t{$username}<br>";
echo "PASSWORD: \t{$password}<br>";

// echo "<script language=javascript>alert('$username')</script>";
?>

<form action="" method="POST">
    <hr>
    <h1>PIZZA PRICE CALCULATOR</h1>
    <label>Pizza Quantity: </label><br>
    <input type="text" name="quantity"required>
    <br><br>
    <input type="submit" value="Calculate">
    <hr>
</form>

</body>
</html>

<?php
// Calculating the Quntity

$price = 4.3;
$quantity = $_POST['quantity'];
$total_price = null;
$total_price = $price * $quantity;

echo "Total Cost: \${$total_price}";
//echo "<script>alert('Total Price: \${$total_price}')</script>";

?>