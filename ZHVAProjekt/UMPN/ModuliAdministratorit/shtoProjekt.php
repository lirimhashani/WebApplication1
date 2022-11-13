<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shtoProjekt'])) {	
	$Emri = $_POST['Emri'];
	$Adresa = $_POST['Adresa'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$ID_Llojeteprojekteve = $_POST['ID_Llojeteprojekteve'];
	
	
	$fotoData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$emrifotos = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	


	
	// checking empty fields
	if(empty($Emri) ||  empty($Adresa) || empty($Pershkrimi))
	{	
		if(empty($Emri)) {
			echo "<font color='red'>Fusha 'Emri' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Adresa)) {
			echo "<font color='red'>Fusha 'Adresa' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha 'Pershkrimi' eshte e zbrazet!</font><br/>";
		}
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umpn_projekti(Emri,Adresa,Pershkrimi,ID_Llojeteprojekteve, foto, emrifotos) VALUES('$Emri','$Adresa', '$Pershkrimi', '$ID_Llojeteprojekteve', '$fotoData', '$emrifotos')");
		
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
