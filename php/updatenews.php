<?php

$servername = "5.77.35.251";
$username = "username";
$password = "password";
$dbname = "pwd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST["updateText"]))

$header = $_POST["rubes"];
$text = $_POST["text"];

$sql = "INSERT INTO `news`(`Header`, `Text`) VALUES ('$header' , '$text')";
$result = mysql_query($sql) or die(mysql_error());


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

