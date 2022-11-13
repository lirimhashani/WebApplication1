<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("konfigurimi.php");	
?>

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli i Perdoruesit</title>
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
			<section id="two" class="wrapper style2">
				<header class="major">
				    <h3>Forma per kontakt</h3>
					
					
				
				<div class="container">
				 <div class="4u">
					<form method="post" action="shtoKontakt.php">
						<input type="text" name="Subjekti" id="Subjekti" value="" placeholder="Subjekti" />
						<br>
						<textarea name="Mesazhi" id="Mesazhi" placeholder="Mesazhi" rows="6"></textarea>				
						<br>
						<input type="email" name="Email" id="Email" value="" placeholder="Email-i" />
						<br>
						<ul class="actions">
						<li><input type="submit" name="shtoKontakt" value="Dergo mesazh" class="button alt" /></li>
						</ul>
						</form>
				 </div>	
				</div>
				 </header>
			</section>
			
		<!-- Two -->
		<!-- Three -->
		
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>