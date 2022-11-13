<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$ID_Kontakti = $_GET['ID_Kontakti'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umpn_kontakti WHERE ID_Kontakti=$ID_Kontakti");

//redirecting to the display page (index.php in our case)
header("Location:fshij_kontakt.php");
?>

