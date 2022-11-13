<?php
/* Kontrollon sesionin */
include('konfigurimi.php');
session_start();
$kontrollo_perdorues=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidh,"SELECT perdoruesi FROM umpn_perdoruesit WHERE perdoruesi='$kontrollo_perdorues' ");
$rreshti=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$kyq_perdorues=$rreshti['perdoruesi'];
if(!isset($kontrollo_perdorues))
{ header("Location: index.php");} 
?>