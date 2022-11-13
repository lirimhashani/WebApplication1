<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$ID_Llojeteprojekteve = $_GET['ID_Llojeteprojekteve'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umpn_llojeteprojekteve WHERE ID_Llojeteprojekteve=$ID_Llojeteprojekteve");

//redirecting to the display page (index.php in our case)
header("Location: fshij_llojeteprojekteve.php");
?>