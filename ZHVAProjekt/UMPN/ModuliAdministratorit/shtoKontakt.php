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

if(isset($_POST['shtoKontakt'])) {	
	$Subjekti = $_POST['Subjekti'];
	$Mesazhi = $_POST['Mesazhi'];
	$Email = $_POST['Email'];
		
	// checking empty fields
	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Subjekti)) {echo "<font color='red'>Fusha 'Subjekti' eshte e zbrazet!</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Fusha 'Mesazhi' eshte e zbrazet!</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Fusha 'Email' eshte e zbrazet!</font><br/>";}
		//link to the previous Mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umpn_kontakti(Subjekti,Mesazhi,Email) VALUES('$Subjekti','$Mesazhi','$Email')");
		//display success messMesazhi
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View rezultati</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'kontakti.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>

</body>
</html>
