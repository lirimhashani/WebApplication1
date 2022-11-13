<?php
//including the database connection file
include("konfigurimi.php");

//getting pid of the data from url
$pid = $_GET['pid'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umpn_perdoruesit WHERE pid=$pid");

//redirecting to the display page (index.php in our case)
header("Location: fshije_perdorues.php");
?>

