<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$ID_Projekti = $_GET['ID_Projekti'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umpn_projekti WHERE ID_Projekti=$ID_Projekti");

//redirecting to the display page (index.php in our case)
header("Location: fshij_projekt.php");
?>
