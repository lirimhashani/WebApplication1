<?php
/* Index.php faqja qe permban formen e loginit) */
	include('kycu.php'); // Include Login Script
	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: faqjaEadminit.php');
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

			<?php include_once("titulliFaqesadm.php"); ?>

		<!-- Banner -->

		<!-- One -->

			
		<!-- Two -->


		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h3>Kycja ne webaplikacion</h3>
					        	<h3>Udhëzim</h3>
					        	<p><i>Për t`u kycur në webaplikacion ju lutem kontaktone administratorin për krijimin e llogarisë</i></p>
							</section>
						</div>
						<div class="4u">
							<section>
                                <form method="post" action="">
							    <input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="Përdoruesi" />
								<br>
								<input type="password" name="fjalekalimi" id="fjalekalimi" value="" placeholder="Fjalëkalimi" />
						        <br>
								<ul class="actions">
						            <li><input type="submit" name="submit" value="Kycu"  /></li>
						        </ul>
						</form>
						

							</section>
							
						</div>
					</div>
				</div>
			</section>			
			
<!-- Footer -->

			<?php include_once("mbarimiFaqes.php"); ?>

	</body>
</html>