<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['fresko_kontakt']))
{	
	$ID_Kontakti = $_POST['ID_Kontakti'];
	
	$Subjekti=$_POST['Subjekti'];
	$Mesazhi=$_POST['Mesazhi'];
	$Email=$_POST['Email'];	
	
	// checking empty fields
	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {	
			
		if(empty($Subjekti)) {
			echo "<font color='red'>Fusha 'Subjekti' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Mesazhi)) {
			echo "<font color='red'>Fusha 'Mesazhi' eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>Fusha 'Email-i' eshte e zbrazet!</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umpn_kontakti SET Subjekti='$Subjekti',Mesazhi='$Mesazhi',Email='$Email' WHERE ID_Kontakti=$ID_Kontakti");
		
		//redirectig to the display pmessage. In our case, it is admin.php
		header("Location: modifiko_kontakt.php");
	}
}
?>
<?php
//getting cid from url
$ID_Kontakti = $_GET['ID_Kontakti'];

//selecting data associated with this particular cid
$rezultati = mysqli_query($lidh,"SELECT * FROM umpn_kontakti WHERE ID_Kontakti=$ID_Kontakti");

while($rez = mysqli_fetch_array($rezultati))
{
	$Subjekti = $rez['Subjekti'];
	$Mesazhi = $rez['Mesazhi'];
	$Email = $rez['Email'];
}
?>

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Modifikimi i perdoruesëve</title>
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
	<body id="top">

		<!-- Header -->
		
			<?php include_once("meny.php"); ?>
			

		<!-- Banner -->
		
			<?php include_once("titulliFaqes.php"); ?>
			

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
				    <h3>Modifiko të dhënat e kontaktit</h3>
					
					
				</header>
				<div class="container">
				 <div class="4u">
				<form name="form1" method="post" action="fresko_kontakt.php">
				Subjekti
				<input type="text" name="Subjekti" value='<?php echo $Subjekti;?>'   required />
				<br>
				Mesazhi
				<input type="text" name="Mesazhi" value='<?php echo $Mesazhi;?>'   required />
				<br>
				Email-i
				<input type="text" name="Email" value='<?php echo $Email;?>'   required />
				<br >
				<input type="hidden" name="ID_Kontakti" value='<?php echo $_GET['ID_Kontakti'];?>' />
				<input type="submit" name="fresko_kontakt" value="Modifiko">
				</form>
				</div>
				 
				 </div>
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>