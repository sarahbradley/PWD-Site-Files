<?php

include('connect.php');

if (isset($_POST['update']))

$plot_num = $_POST['PlotNumber'];

$sql = mysql_query("UPDATE `Developments` SET `Price`= \"BOOKED\" WHERE `PlotNumber` = '$plot_num'");
mysqli_query($conn, $sql);
if ($sql === false) { die(mysql_error()); } 


$conn->close();
?>
