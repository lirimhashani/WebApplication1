<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollimi.php");	
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
				    <h3>Shto llojin e projektit</h3>
					
					
				</header>
				<div class="container">
				 <div class="4u">
                 <form method="post" action="shtoLlojeteprojekteve.php">
					<input type="text" name="Llojeteprojekteve" id="Llojeteprojekteve" value="" placeholder="Lloji i projektit" />
						<br>
					<ul class="actions">
						<li><input type="submit" name="shtoLlojeteprojekteve" value="Shto" class="primary" /></li>
					 </ul>
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