
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pwd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Header, Text FROM news ORDER BY Header Desc LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   print "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<h4>".$row["Header"]."</h4><p>".$row["Text"]."</p>";
    }
    print "";
} else {
    echo "0 results";
}

$conn->close();
?>

