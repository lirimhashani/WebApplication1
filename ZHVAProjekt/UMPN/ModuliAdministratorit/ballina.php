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
	<body id="top" >

		<!-- Header -->
		<?php include_once("meny.php"); ?>

		<!-- Banner -->
		<?php include_once("titulliFaqes.php"); ?>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
				<p style="text-align:center;">Përshëndetje, <em><?php  echo $kyq_perdorues;?>!</em></p>
					<h2>MENAXHIMI TE DHENAVE TE BALLINES</h2>
				    <div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<a href="shto_llojeteprojekteve.php"><i class="icon fa-cog major"></i></a>
								<h3>Shto Lloj te <br>Projektit</h3>
								<p>Forma per shtimin e llojeve te reja te projekteve ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="modifiko_llojeteprojekteve.php"><i class="icon fa-cog major"></i></a>
								<h3>Modifiko Lloj te Projektit</h3>
								<p>Forma per modifikim te llojeve te projekteve ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="fshij_llojeteprojekteve.php"><i class="icon fa-cog major"></i></a>
								<h3>Fshijë Lloj te Projektit</h3>
								<p>Forma per fshirje te llojeve te projekteve ne webaplikacion.</p>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="4u">
							<section class="special box">
								<a href="shto_projekt.php"><i class="icon fa-cog major"></i></a>
								<h3>Shto Projekt</h3>
								<p>Forma per shtimin e projekteve ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="modifiko_projekt.php"><i class="icon fa-cog major"></i></a>
								<h3>Modifiko Projekt</h3>
								<p>Forma per modifikim te projekteve ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="fshij_projekt.php"><i class="icon fa-cog major"></i></a>
								<h3>Fshijë Projekt</h3>
								<p>Forma per fshirje te projekteve ne webaplikacion.</p>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="4u">
							<section class="special box">
								<a href="shto_tedhena.php"><i class="icon fa-cog major"></i></a>
								<h3>Shto Te Dhenat</h3>
								<p>Forma per shtimin e te dhenave te reja ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="modifiko_tedhena.php"><i class="icon fa-cog major"></i></a>
								<h3>Modifiko Te Dhenat</h3>
								<p>Forma per modifikim e te dhenave aktuale ne webaplikacion.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<a href="fshij_tedhena.php"><i class="icon fa-cog major"></i></a>
								<h3>Fshijë Te Dhenat</h3>
								<p>Forma per fshirje te te dhenave aktuale ne webaplikacion.</p>
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