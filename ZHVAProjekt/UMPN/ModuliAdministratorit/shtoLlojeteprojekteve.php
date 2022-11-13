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

if(isset($_POST['shtoLlojeteprojekteve'])) {	
	$Llojeteprojekteve = $_POST['Llojeteprojekteve'];
	
		
	// checking empty fields
	if(empty($Llojeteprojekteve)) {			
		if(empty($Llojeteprojekteve)) {echo "<font color='red'>Llojeteprojekteve field is empty.</font><br/>";}
		
		//link to the previous programi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umpn_llojeteprojekteve(Llojeteprojekteve) VALUES('$Llojeteprojekteve')");
		//display success messprogrami
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View rezultati</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
