<?php

include('connect.php');

$sql = "SELECT PlotNumber, HouseType, Description, SqFt, Price, Development FROM Developments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   print "<section id='change'><table class='table_center'id ='availability'><tr><th><strong>Plot Number</strong></th><th><strong>House Type</strong></th><th><strong>Description</strong></th><th><strong>Sq Ft</strong></th><th><strong>Price</strong></th><th></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<tr id='rowred'><td>".$row["PlotNumber"]."</td><td>".$row["HouseType"]."</td><td>".$row["Description"]."</td><td>".$row["SqFt"]."</td><td id='rowcheck'>".$row["Price"]."</td></tr>";
    }
    print "</table></section>";
} else {
    echo "0 results";
}

$conn->close();
?>

