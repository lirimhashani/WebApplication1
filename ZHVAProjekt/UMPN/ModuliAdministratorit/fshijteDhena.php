<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umpn_tedhena WHERE ID_tedhenat=$ID_tedhenat");

//redirecting to the display page (index.php in our case)
header("Location:fshij_tedhena.php");
?>