<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Listing</title>
</head>
<body>
    <h1>Added</h1>

<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database opperations (DB is also on server)
-->    

<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
echo "<p><strong>$firstname</strong> has been added.</p>";
$lastname = $_GET['apiFirst'];
echo "<p><strong>$lastname</strong> has been added.</p>";
$countrylocation = $_GET['apiFirst'];
echo "<p><strong>$countrylocation</strong> has been added.</p>";

// DATABASE OPERATIONS:
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "user72";
$password = "72pill";
$dbname = "db72";

// Create connection (assuming these exist -- we set up the DB on the CLI)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL OPPERATIONS
$sql = "INSERT INTO randuser VALUES ('$firstname', '$lastname', '$countrylocation')";
//$sql = "INSERT INTO randuser VALUES ('$lastname')";
//$sql = "INSERT INTO randuser VALUES ('$countrylocation')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

    <br><br>
    <button onclick="history.back()">Back</button>
<footer><h3> This is what i did with bootstrap...</h3></footer>
</body>
</html>
