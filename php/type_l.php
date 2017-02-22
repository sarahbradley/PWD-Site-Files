<?php
include('connect.php');
$sql = "SELECT PlotNumber, Description, SqFt, Price FROM Developments WHERE TypeHouse = 'L' AND Price !='BOOKED'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   print "<div class='crimson'><p>The following plots are still available for this house type:<p><section id='typeeavail'><table class='e_avail' id ='eavail'><tr><th><strong>Plot Number</strong></th><th><strong>Description</strong></th><th><strong>Sq Ft</strong></th><th><strong>Price</strong></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<tr id='rowred'><td>".$row["PlotNumber"]."</td><td>".$row["Description"]."</td><td>".$row["SqFt"]."</td><td>".$row["Price"]."</td></tr>";
    }
    print "</table></section>";
    print "<div class='enquire'><i class='fa fa-envelope' aria-hidden='true'></i><a target='_blank' href='https://docs.google.com/forms/d/e/1FAIpQLScx1CKXNl47fqbBGg1QQrJ67Do0HeYrH231Yaw-utxJu7TfNA/viewform' id='menuitem'>&nbsp;Enquire</a><br></div></div>";
} else {
    echo "<div class='crimson'><p>All Type L houses have been booked. View other house types in this development below.</p></div>";
}
$conn->close();
?>