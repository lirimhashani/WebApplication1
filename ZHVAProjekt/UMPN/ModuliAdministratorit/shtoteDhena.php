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
//including the database connection dosja
include_once("konfigurimi.php");

if(isset($_POST['shtoteDhena'])) {	
	$titulli_itedhenave = $_POST['titulli_itedhenave'];
	$pershkrimi_itedhenave = $_POST['pershkrimi_itedhenave'];
	$dosja = $_POST['dosja'];

 		$pamja_efaqes = $_POST['pamja_efaqes'];
	

	
	
	// checking empty fields
	if(empty($titulli_itedhenave) || empty($pershkrimi_itedhenave)|| empty($dosja) || empty($pamja_efaqes)) {
				
		if(empty($titulli_itedhenave)) {
			echo "<font color='red'>Fusha 'Titulli' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($pershkrimi_itedhenave)) {
			echo "<font color='red'>Fusha 'Pershkrimi' eshte e zbrazet!</font><br/>";
		}
			if(empty($dosja)) {
			echo "<font color='red'>Fusha 'Dosja' eshte e zbrazet!</font><br/>";
		}
		if(empty($pamja_efaqes)) {
			echo "<font color='red'>Fusha 'Pamja e Faqes' eshte e zbrazet!</font><br/>";
		}
		
		//link to the previous pMbititulli_itedhenave
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umpn_tedhena(titulli_itedhenave,pershkrimi_itedhenave, dosja, pamja_efaqes) VALUES('$titulli_itedhenave', '$pershkrimi_itedhenave', 'images/$dosja', '$pamja_efaqes')");
				//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View rezultati</a>";
	}
}
?>

</body>
</html>
