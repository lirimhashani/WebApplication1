<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['fresko_llojeteprojektit']))
{	
	$ID_Llojeteprojekteve = $_POST['ID_Llojeteprojekteve'];
	
	$Llojeteprojekteve=$_POST['Llojeteprojekteve'];
	
	
	// checking empty fields
	if(empty($Llojeteprojekteve) ) {	
			
		if(empty($Llojeteprojekteve)) {
			echo "<font color='red'>Fusha 'Llojeteprojekteve' eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umpn_llojeteprojekteve SET Llojeteprojekteve='$Llojeteprojekteve' WHERE ID_Llojeteprojekteve=$ID_Llojeteprojekteve");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_llojeteprojekteve.php");
	}
}
?>
<?php
//getting ID_Dep from url
$ID_Llojeteprojekteve = $_GET['ID_Llojeteprojekteve'];

//selecting data associated with this particular ID_Dep
$rezultati = mysqli_query($lidh,"SELECT * FROM umpn_llojeteprojekteve WHERE ID_Llojeteprojekteve=$ID_Llojeteprojekteve");

while($rez = mysqli_fetch_array($rezultati))
{
	$Llojeteprojekteve = $rez['Llojeteprojekteve'];
	
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
	<body id="top">

		<!-- Header -->
		
			<?php include_once("meny.php"); ?>
			

		<!-- Banner -->
		
			<?php include_once("titulliFaqes.php"); ?>
			

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
				    <h3>Modifiko të dhënat per Llojet e Projekteve</h3>
					
					
				</header>
				<div class="container">
				 <div class="4u">
                 <form Llojeteprojekteve="form1" method="post" action="fresko_llojeteprojektit.php">
				Llojet e Projekteve
				<input type="text" name="Llojeteprojekteve" value='<?php echo $Llojeteprojekteve;?>'   required />
				<br>
		
				<input type="hidden" name="ID_Llojeteprojekteve" value='<?php echo $_GET['ID_Llojeteprojekteve'];?>' />
				<input type="submit" name="fresko_llojeteprojektit" value="Modifiko">
		
		
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