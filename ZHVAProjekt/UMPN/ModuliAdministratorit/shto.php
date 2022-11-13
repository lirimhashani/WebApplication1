<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head>

<body>

<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	$perdoruesi = $_POST['perdoruesi'];
	$fjalekalimi = $_POST['fjalekalimi'];
	$email = $_POST['email'];
		
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi) || empty($email)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Fusha 'Perdoruesi' eshte e zbrazet!</font><br/>";}
		if(empty($fjalekalimi)) {echo "<font color='red'>Fusha 'Fjalekalimi' eshte e zbrazet!</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Fusha 'Email' eshte e zbrazet!</font><br/>";}
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umpn_perdoruesit(perdoruesi,fjalekalimi,email) VALUES('$perdoruesi','$fjalekalimi','$email')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View rezultati</a>";
	}
}
?>

</body>
</html>
