<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfigurimi.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalekalimi"]))
		{
			$error = "Ploteso te dyja fushat!";
		}else
		{
			// Define $username and $password
			$perdoruesi=$_POST['perdoruesi'];
			$fjalekalimi=$_POST['fjalekalimi'];
			//Check username and password from database
			$sql="SELECT pid FROM umpn_perdoruesit WHERE perdoruesi='$perdoruesi' 
			and fjalekalimi='$fjalekalimi'";
			$rezultati=mysqli_query($lidh,$sql);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; // Initializing Session
				header("location: admin_home.php"); // Redirecting To Other Page
			}else
			{
				$error = "Perdoruesi ose fjalekalimi jane gabim!";
			}
		}
	}
?>