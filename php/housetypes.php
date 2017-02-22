<?php

include('connect.php');

$sql = "SELECT HouseType, Description, Price FROM Housetypes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   print "<section id='housetypes'><table class='housetypes'id ='housetypes'><tr><th><strong>House Type</strong></th><th><strong>Description</strong></th><th><strong>Price From</strong></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<tr id='htrow'><td>".$row["HouseType"]."</td><td>".$row["Description"]."</td><td>".$row["Price"]."</td></tr>";
    }
    print "</table></section>";
} else {
    echo "0 results";
}

$conn->close();
?>

