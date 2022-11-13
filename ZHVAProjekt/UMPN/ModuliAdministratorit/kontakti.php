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

		<!-- Header-->
		
			<?php include_once("meny.php"); ?>
			

		<!-- Banner -->
		
			<?php include_once("titulliFaqes.php"); ?>
			

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
					<h2>MENAXHIMI TE DHENAVE TE KONTAKTIT</h2>
				    <div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<a href="shto_kontakt.php"><i class="icon fa-cog major"></i></a>
								<h3>Shto Kontakt</h3>
								<p>Forma per shtimin e kontakteve te rinje ne webaplikacion me te drejta te administratorit.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="modifiko_kontakt.php"><i class="icon fa-cog major"></i></a>
								<h3>Modifiko Kontakt</h3>
								<p>Forma per modifikim te te dhenave te kontateve aktual ne webaplikacion me te drejta te administratorit.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="fshij_kontakt.php"><i class="icon fa-cog major"></i></a>
								<h3>Fshijë Kontakt</h3>
								<p>Forma per fshirje te <br>kontakteve aktual <br>nga webaplikacion.</p>
							</section>
						</div>
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