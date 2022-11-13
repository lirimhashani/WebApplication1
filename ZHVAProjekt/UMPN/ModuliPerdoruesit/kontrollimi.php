<?php
/* Kontrollon sesionin */
include('konfigurimi.php');
session_start();
$user_check=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidh,"SELECT perdoruesi FROM umpn_perdoruesit WHERE perdoruesi='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['perdoruesi'];
if(!isset($user_check))
{ header("Location: index.php");} 
?>